<?php namespace CleverreachExtension\Core\Api;

/**
 * Receiver adapter for CleverReach Api.
 *
 * @since      0.1.0
 * @package    Cleverreach_Extension
 * @subpackage Cleverreach_Extension/includes/api
 * @author     Sven Hofmann <info@hofmannsven.com>
 */
class Cleverreach_Receiver_Adapter implements Receiver_Adapter {

	private $cleverreach;

	public function __construct( Cleverreach $cleverreach ) {

		$this->cleverreach = $cleverreach;

	}

	/**
	 * Adds a new single receiver.
	 *
	 * @since 0.3.0
	 *
	 * @param $user
	 * @param $list_id
	 *
	 * @return string
	 */
	public function add( $user, $list_id ) {

		try {
			$result = $this->cleverreach->api_post_to_list( 'receiverAdd', $user, $list_id );
		} catch ( \Exception $e ) {
			$result = $e->getMessage();
		}

		return $result;

	}

}