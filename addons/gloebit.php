<?php
/**
 * Gloebit default configuration
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

if ( CURRENCY_PROVIDER != 'gloebit' ) {
	 die();
}
/**
 * Set to true to activate sandbox mode, during initial installation and tests.
 * Set to false once ready to go live.
 *
 * @var boolean
 */
if ( ! defined( 'GLOEBIT_SANDBOX' ) ) {
	define( 'GLOEBIT_SANDBOX', false );
}

/**
 * Gloebit currency conversion table
 *
 * Used to display a cost estimation when using the viewer Buy Currency feature.
 * Conversion rate between Gloebit amount and US$ cents. Must match the packages
 * and prices idsplayed on Gloebit website.
 * // TODO: fetch conversion values from Gloebit website.
 *
 * @var array
 */
if ( ! defined( 'GLOEBIT_CONVERSION_TABLE' ) ) {
	define(
		'GLOEBIT_CONVERSION_TABLE',
		array(
			400   => 199,
			1050  => 499,
			2150  => 999,
			4500  => 1999,
			11500 => 4999,
		)
	);
}

/**
 * Affects the suggested purchase amount. Gloebit only allow predifined amounts
 * to be purchased.
 *   - Set threshold of 1.0 to switch to the next pack even for 1$G more
 *     (e.g. if user request 401, suggest 1050)
 *   - Set theshold to 1.1 or 1.2 to keep the low pack for small differences.
 *     (e.g. if user request 401, still suggest 400)
 * The user can still choose another pack on the web purchase page.
 *
 * @GLOEBIT_CONVERSION_THRESHOLD float  must be >= 1.0
 */
if ( ! defined( 'GLOEBIT_CONVERSION_THRESHOLD' ) ) {
	define( 'GLOEBIT_CONVERSION_THRESHOLD', 1.2 );
}
