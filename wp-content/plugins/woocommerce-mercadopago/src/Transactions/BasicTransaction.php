<?php

namespace MercadoPago\Woocommerce\Transactions;

use Exception;
use MercadoPago\Woocommerce\Gateways\AbstractGateway;
use MercadoPago\Woocommerce\Entities\Metadata\PaymentMetadata;
use WC_Order;

class BasicTransaction extends AbstractPreferenceTransaction
{
    public const ID = 'basic';

    /**
     * Basic Transaction constructor
     *
     * @param AbstractGateway $gateway
     * @param WC_Order $order
     *
     * @throws Exception
     */
    public function __construct(AbstractGateway $gateway, WC_Order $order)
    {
        parent::__construct($gateway, $order);

        $this->setPaymentMethodsTransaction();
    }

    /**
     * Bind to parent getInternalMetadata method to be able to mock it on tests
     * @return PaymentMetadata
     */
    protected function getInternalMetadataStoreAndSellerInfo(): PaymentMetadata
    {
        return parent::getInternalMetadata();
    }

    /**
     * Get internal metadata
     *
     * @return PaymentMetadata
     */
    public function getInternalMetadata(): PaymentMetadata
    {
        $internalMetadata = $this->getInternalMetadataStoreAndSellerInfo();

        $internalMetadata->checkout      = 'smart';
        $internalMetadata->checkout_type = $this->mercadopago->hooks->options->getGatewayOption($this->gateway, 'method', 'redirect');

        return $internalMetadata;
    }

    /**
     * Set payment methods
     *
     * @return void
     */
    public function setPaymentMethodsTransaction(): void
    {
        $this->setInstallmentsTransaction();
        $this->setExcludedPaymentMethodsTransaction();
    }

    /**
     * Set installments
     *
     * @return void
     */
    public function setInstallmentsTransaction(): void
    {
        $installments = (int) $this->mercadopago->hooks->options->getGatewayOption($this->gateway, 'installments', '24');
        $this->transaction->payment_methods->installments = ($installments == 0) ? 12 : $installments;
    }

    /**
     * Set excluded payment methods
     *
     * @return void
     */
    public function setExcludedPaymentMethodsTransaction(): void
    {
        $exPayments = $this->mercadopago->sellerConfig->getExPayments($this->gateway);

        if (count($exPayments) != 0) {
            foreach ($exPayments as $excluded) {
                $entity = [
                    'id' => $excluded,
                ];

                $this->transaction->payment_methods->excluded_payment_methods->add($entity);
            }
        }
    }
}
