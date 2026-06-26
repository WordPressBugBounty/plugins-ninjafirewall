<?php
/*
 +---------------------------------------------------------------------+
 | NinjaFirewall (WP Edition)                                          |
 |                                                                     |
 | (c) NinTechNet - https://nintechnet.com/                            |
 +---------------------------------------------------------------------+
 | This program is free software: you can redistribute it and/or       |
 | modify it under the terms of the GNU General Public License as      |
 | published by the Free Software Foundation, either version 3 of      |
 | the License, or (at your option) any later version.                 |
 |                                                                     |
 | This program is distributed in the hope that it will be useful,     |
 | but WITHOUT ANY WARRANTY; without even the implied warranty of      |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the       |
 | GNU General Public License for more details.                        |
 +---------------------------------------------------------------------+
*/

if (! defined( 'NFW_ENGINE_VERSION' ) ) { die( 'Forbidden' ); }
?>
<div class="card">
	<p style="text-align:center;font-size: 1.8em; font-weight: bold">NinjaFirewall (WP Edition) v<?php echo NFW_ENGINE_VERSION ?></p>
	<p style="text-align:center"><img src="<?php echo plugins_url() ?>/ninjafirewall/images/ninjafirewall_100.png" /></p>
	<p style="text-align:center;font-size: 1.2em;"><font onContextMenu="nfw_eg();return false;">&copy;</font> 2012-<?php echo date( 'Y' ) ?> <a href="https://nintechnet.com/" target="_blank" title="The Ninja Technologies Network"><strong>NinTechNet</strong></a><br />The Ninja Technologies Network</p>
	<br />
	<font style="font-size: 1.1em;">
	<ul style="list-style: disc;">
		<li><?php esc_html_e('Our blog:', 'ninjafirewall') ?> <a href="https://blog.nintechnet.com/">https://blog.nintechnet.com/</a></li>
		<li><a href="https://blog.nintechnet.com/ninjafirewall-general-data-protection-regulation-compliance/"><?php esc_html_e('GDPR Compliance', 'ninjafirewall') ?></a></li>
		<li><a href="https://wordpress.org/support/view/plugin-reviews/ninjafirewall?rate=5#postform"><?php esc_html_e('Rate it on WordPress.org!', 'ninjafirewall') ?></a> <img style="vertical-align:middle" src="<?php echo plugins_url() ?>/ninjafirewall/images/rate.png" /></li>
	</ul>
	<strong><?php esc_html_e('From the same author:', 'ninjafirewall' ) ?></strong>
	<ul style="list-style: disc;">
		<li><a href="https://wordpress.org/plugins/code-profiler/"><strong>Code Profiler</strong></a>: <?php esc_html_e('WordPress Performance Profiling and Debugging Made Easy.', 'ninjafirewall' ) ?></li>
		<li><a href="https://wordpress.org/plugins/safercheckout-lite/"><strong>SaferCheckout</strong></a>: <?php esc_html_e('Fraud prevention for WooCommerce stores.', 'ninjafirewall' ) ?></li>
		<li><a href="https://wordpress.org/plugins/ninjascanner/"><strong>NinjaScanner</strong></a>: <?php esc_html_e('A lightweight, fast and powerful antivirus scanner for WordPress.', 'ninjafirewall' ) ?></li>
	</ul>
	</font>
</div>
<?php

// ---------------------------------------------------------------------
// EOF
