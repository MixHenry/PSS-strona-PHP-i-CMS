<?php
/**
 * Theme activation.
 * @package Ajima
 * Theme Dashboard [Free VS Pro]
 */
function ajima_free_vs_pro_html() {
	ob_start();
	?>
	<div class="theme-admin-title"><?php esc_html_e( 'Differences between Ajima and Ajima Pro', 'ajima' ); ?></div>
	<div class="theme-admin-description"><?php esc_html_e( 'Here are some of the differences between Ajima and Ajima Pro:', 'ajima' ); ?></div>

	<table class="freemium-comparison-table">
		<thead>
			<tr>
				<th><?php esc_html_e( 'Feature', 'ajima' ); ?></th>
				<th><?php esc_html_e( 'Ajima', 'ajima' ); ?></th>
				<th><?php esc_html_e( 'Ajima Pro', 'ajima' ); ?></th>
			</tr>
		</thead>
		<tbody>
            <tr>
                <td><?php esc_html_e( 'Responsive Design', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Multiple Blog Layouts', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Live editing in Customizer', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'One Click Demo Import', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>

            <tr>
                <td><?php esc_html_e( 'Access to all Google Fonts', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Access to Color Options', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
			<tr>
				<td><?php esc_html_e( 'Preloader Option', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge">2</span></td>
				<td><span class="theme-dashboard-badge">5</span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Multiple Header Options', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge">3 Layouts</span></td>
				<td><span class="theme-dashboard-badge">5 Layouts</span></td>
			</tr>
            <tr>
                <td><?php esc_html_e( 'Logo and Title Customization', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Header Image', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Custom Widgets', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Frontpage Banner', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge">2 Layouts</span></td>
                <td><span class="theme-dashboard-badge">3 Layouts</span></td>
            </tr>
			<tr>
				<td><?php esc_html_e( 'Hide Theme Credit Link', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Extra Widget Area', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Instagram Module', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Twitter Module', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Table of Contents', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Share Buttons', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Maintenance mode', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Hooks system', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
            <tr>
                <td><?php esc_html_e( 'Translations Ready', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'SEO Optimized', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'RTL Compatibility', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'WooCommerce Compatibility', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Breadcrumbs Module', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-tertiary"><i class="dashicons dashicons-no-alt"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Gutenberg Compatibility', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Footer Widgets Section', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
            <tr>
                <td><?php esc_html_e( 'Display Related Posts', 'ajima' ); ?></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
                <td><span class="theme-dashboard-badge theme-badge-primary"><i class="dashicons dashicons-saved"></i></span></td>
            </tr>
			<tr>
				<td><?php esc_html_e( 'Support', 'ajima' ); ?></td>
				<td><span class="theme-dashboard-badge">Normal Support</span></td>
				<td><span class="theme-dashboard-badge">Dedicated Priority Support</span></td>
			</tr>
		</tbody>
	</table>

	<div class="theme-admin-separator"></div>

	<h4>
		<a href="https://www.themeinwp.com/theme/ajima-pro/#compare-all-features" target="_blank">
			<?php esc_html_e( 'How Ajima and Ajima Pro are different from each other - here\'s the complete list.', 'ajima' ); ?>
		</a>
	</h4>

	<div class="theme-admin-separator"></div>

    <div class="theme-admin-button-wrap">
		<a href="https://www.themeinwp.com/theme/ajima-pro/" class="button theme-admin-button admin-button-primary">
			<?php esc_html_e( 'Get Ajima Pro Today', 'ajima' ); ?>
		</a>
    </div>
	<?php
	return ob_get_clean();
}

/**
 * Theme Dashboard Settings
 *
 * @param array $settings The settings.
 */
function ajima_dashboard_settings( $settings ) {

	// Starter.

	// Hero.
	$settings['hero_title']       = esc_html__( 'Welcome to Ajima', 'ajima' );
	$settings['hero_themes_desc'] = esc_html__( 'Your installation of Ajima is complete and ready for use. We\'ve prepared a unique onboarding process through our Getting started page. It helps you get started and configure your upcoming website with ease. Let\'s make it shine!', 'ajima' );
	$settings['hero_desc']        = esc_html__( 'Ajima is now installed and ready to go. To help you with the next step, we\'ve gathered together on this page all the resources you might need. We hope you enjoy using Ajima.', 'ajima' );
	$settings['hero_image']       = get_template_directory_uri() . '/inc/admin/dashboard/images/welcome-banner.png';

	// Tabs.
	$settings['tabs'] = array(
		array(
			'name'    => esc_html__( 'Theme Features', 'ajima' ),
			'type'    => 'features',
			'visible' => array( 'free', 'pro' ),
			'data' => array(
                array(
                    'name' => esc_html__('Add Background Image', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=background_image'),
                ),
                array(
                    'name' => esc_html__('Add Widgets', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[panel]=widgets'),
                ),
                array(
                    'name' => esc_html__('Change Site Title or Logo', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=title_tagline'),
                ),
                array(
                    'name' => esc_html__('Topbar Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=topbar_options'),
                ),
                array(
                    'name' => esc_html__('Header Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=header_options'),
                ),
                array(
                    'name' => esc_html__('Progressbar Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=progressbar_options'),
                ),
                array(
                    'name' => esc_html__('Color Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=colors'),
                ),
                array(
                    'name' => esc_html__('Archive Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=archive_options'),
                ),
                array(
                    'name' => esc_html__('Single Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=single_options'),
                ),
                array(
                    'name' => esc_html__('Pagination Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=pagination_options'),
                ),
                array(
                    'name' => esc_html__('Footer Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=footer_options'),
                ),
                array(
                    'name' => esc_html__('Read Time Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=read_time_options'),
                ),
                array(
                    'name' => esc_html__('Dark/Light Mode Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=dark_mode_options'),
                ),
                array(
                    'name' => esc_html__('Preloader Options', 'ajima'),
                    'type' => 'free',
                    'customize_uri' => admin_url('/customize.php?autofocus[section]=preloader_options'),
                ),
            ),
		),
		array(
			'name'    => esc_html__( 'Free vs PRO', 'ajima' ),
			'type'    => 'html',
			'visible' => array( 'free' ),
			'data'    => ajima_free_vs_pro_html(),
		),
		array(
			'name'    => esc_html__( 'Performance optimization tools', 'ajima' ),
			'type'    => 'performance',
			'visible' => array( 'free', 'pro' ),
		),
	);
	
	$settings['tabs'][0]['data'] = array_merge( $settings['tabs'][0]['data'], array(
		array(
			'name'          => esc_html__( 'Typography Option', 'ajima' ),
			'type'          => 'pro',
			'customize_uri' => '/wp-admin/customize.php?autofocus[section]=typography_options',
		),
        array(
            'name'          => esc_html__( 'Remove Footer credits', 'ajima' ),
            'type'          => 'pro',
            'customize_uri' => admin_url( '/customize.php?autofocus[section]=footer_options' ),
        ),
		array(
			'name'          => esc_html__( 'Extra Widget Area', 'ajima' ),
			'type'          => 'pro',
            'customize_uri' => admin_url('/customize.php?autofocus[panel]=widgets'),
		),
		array(
			'name'          => esc_html__( 'Google Maps', 'ajima' ),
			'type'          => 'pro',
			'customize_uri' => '/wp-admin/customize.php?autofocus[section]=ajima_pro_maps',
		),
        array(
            'name'          => esc_html__( 'Instagram Module', 'ajima' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_connect',
            'text'			=> __( 'Display the Instagram feed in your website', 'ajima' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/social-integrations/instagram-integration/">' . __( 'Documentation article', 'ajima' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Twitter Module', 'ajima' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_connect&tab=twitter',
            'text'			=> __( 'Display the Twitter feed in your website', 'ajima' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/social-integrations/twitter-integration/">' . __( 'Documentation article', 'ajima' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Table of Contents', 'ajima' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_table_of_contents',
            'text'			=> __( 'Display table of contents automatically on single post based on the headings tags.', 'ajima' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/content-presentation/table-of-contents/">' . __( 'Documentation article', 'ajima' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Share Buttons', 'ajima' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_share_buttons',
            'text'			=> __( 'Allow visitors to share your content via email and social media.', 'ajima' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/social-integrations/share-buttons/">' . __( 'Documentation article', 'ajima' ) . '</a></div>',
        ),
        array(
            'name'          => esc_html__( 'Maintenance mode', 'ajima' ),
            'type'          => 'pro',
            'customize_uri' => '/wp-admin/options-general.php?page=premiumkits_coming_soon',
            'text'			=> __( 'Display a user-friendly coming soon notice to visitors ', 'ajima' ) . '<div><a target="_blank" href="https://docs.themeinwp.com/docs/premiumkits/utilities/coming-soon/">' . __( 'Documentation article', 'ajima' ) . '</a></div>',
        ),
	) );

	// Documentation.
	$settings['documentation_link'] = 'https://docs.themeinwp.com/docs/ajima/';

	// Promo.
	$settings['promo_title']  = esc_html__( 'Upgrade to Pro', 'ajima' );
	$settings['promo_desc']   = esc_html__( 'Take Ajima to a whole other level by upgrading to the Pro version.', 'ajima' );
	$settings['promo_button'] = esc_html__( 'Discover Ajima Pro', 'ajima' );
	$settings['promo_link']   = 'https://themeinwp.com/theme/ajima-pro';

	// Review.
	$settings['review_link']       = 'https://wordpress.org/support/theme/ajima/reviews/';
	$settings['suggest_idea_link'] = 'https://www.themeinwp.com/contact-us/';

	// Support.
	$settings['support_link']     = 'https://wordpress.org/support/theme/ajima/';
	$settings['support_pro_link'] = 'https://www.themeinwp.com/support/';

	// Community.
	$settings['community_link'] = 'https://www.facebook.com/themeinwp/';

	$theme = wp_get_theme();
	// Changelog.
	$settings['changelog_version'] = $theme->version;
	$settings['changelog_link']    = 'https://themeinwp.com/changelog/ajima/';

	return $settings;
}
add_filter( 'thd_register_settings', 'ajima_dashboard_settings' );