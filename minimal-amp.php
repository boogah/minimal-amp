<?php
/**
 * Plugin Name:       Minimal AMP
 * Plugin URI:        https://github.com/boogah/minimal-amp/
 * Description:       An incredibly minimal AMP implementation, courtesy of <a href="https://mercury.postlight.com/amp-converter/">Postlight Mercury</a>. Just enable and go!
 * Version:           1.0.0
 * Author:            Jason Cosper
 * Author URI:        https://jasoncosper.com/
 * License:           GPL v3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       minimal-amp
 * Domain Path:       /languages
 *
 * @link              https://jasoncosper.com/
 * @package           WordPress
 * @author            Jason Cosper
 * @version           1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Include a link to the AMP version of the post in the header of single posts.
 */
function minimal_amp_include() {
	if ( is_single() ) {
		?>
		<link rel="amphtml" href="https://mercury.postlight.com/amp?url=<?php echo rawurlencode( get_the_permalink() ); ?>">
		<?php
	}
}
add_action( 'wp_head', 'minimal_amp_include' );
