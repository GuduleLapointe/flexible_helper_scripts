<?php
/**
 * Podex default configuration file.
 *
 * DO NOT EDIT THIS FILE. It will be replaced on next update.
 * Instead copy the 'define(...)' lines to config.php, before the addons include
 * command, and customize from there.
 *
 * @package		magicoli/opensim-helpers
 * @author 		Gudule Lapointe <gudule@speculoos.world>
 * @link 			https://github.com/magicoli/opensim-helpers
 * @license		AGPLv3
 */

if ( CURRENCY_PROVIDER != 'podex' ) {
 die();
}

/**
 * This is the message displayed to users when they use the viewer "Buy
 * currency" feature. Podex Buy and sell transactions are actually provided by
 * in-world terminals. Adjust the message and the url to instruct user to
 * teleport to the region providing Podex terminals.
 *
 * @var [type]
 */
if ( ! defined( 'PODEX_ERROR_MESSAGE' ) ) {
	define( 'PODEX_ERROR_MESSAGE', 'Please use our terminals in-world to proceed. Click OK to teleport to terminals region.' );
}

if ( ! defined( 'PODEX_REDIRECT_URL' ) ) {
	define( 'PODEX_REDIRECT_URL', 'secondlife://Podex Exchange/128/128/21' );
}
