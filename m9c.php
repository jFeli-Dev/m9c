<?php
/*
Plugin Name: m9c 
Plugin URI:  N/A
Description: A plugin made for the HOA assocciation
Version: 1.0    
Author: Edward Pratt and Jean
Author URI:  N/A
Text Domain: m9c
License:     GPL3
T
You should have received a copy of the GNU General Public License
along with this plugin. If not, see https://www.gnu.org/licenses/gpl.html.
*/

/**
 * Register post type.
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/postsTypes.php';
register_activation_hook( __FILE__, 'm9c_rewrite_flush' );