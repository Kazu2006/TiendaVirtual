<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\API\Google\Query;

defined( 'ABSPATH' ) || exit;

/**
 * Class AdsCampaignQuery
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\API\Google\Query
 */
class AdsCampaignQuery extends AdsQuery {

	/**
	 * AdsCampaignQuery constructor.
	 */
	public function __construct() {
		parent::__construct( 'campaign' );
		$this->columns(
			[
				'campaign.id',
				'campaign.name',
				'campaign.status',
				'campaign.advertising_channel_type',
				'campaign.shopping_setting.feed_label',
				'campaign_budget.amount_micros',
			]
		);
	}
}
