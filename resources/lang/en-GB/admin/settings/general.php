<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domain',
    'ad_domain_help'			=> 'This is sometimes the same as your email domain, but not always.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'This is an Active Directory server',
    'alert_email'				=> 'Send alerts to',
    'alerts_enabled'			=> 'Alerts Enabled',
    'alert_interval'			=> 'Expiring Alerts Threshold (in days)',
    'alert_inv_threshold'		=> 'Inventory Alert Threshold',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Asset IDs',
    'audit_interval'            => 'Audit Interval',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months.',
    'audit_warning_days'        => 'Audit Warning Threshold',
    'audit_warning_days_help'   => 'How many days in advance should we warn you when assets are due for auditing?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset IDs',
    'auto_increment_prefix'		=> 'Prefix (optional)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset IDs first to set this',
    'backups'					=> 'Backups',
    'barcode_settings'			=> 'Barcode Settings',
    'confirm_purge'			    => 'Confirm Purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Custom CSS',
    'custom_css_help'			=> 'Enter any custom CSS overrides you would like to use. Do not include the &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
    'default_currency'  		=> 'Default Currency',
    'default_eula_text'			=> 'Default EULA',
    'default_language'			=> 'Default Language',
    'default_eula_help_text'	=> 'You can also associate custom EULAs to specific asset categories.',
    'display_asset_name'        => 'Display Asset Name',
    'display_checkout_date'     => 'Display Checkout Date',
    'display_eol'               => 'Display EOL in table view',
    'display_qr'                => 'Display 3D Codes',
    'display_alt_barcode'		=> 'Display 1D barcode',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D Barcode Type',
    'alt_barcode_type'			=> '1D barcode type',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA Settings',
    'eula_markdown'				=> 'This EULA allows <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavoured markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'General Settings',
    'generate_backup'			=> 'Generate Backup',
    'header_color'              => 'Header Color',
    'info'                      => 'These settings let you customize certain aspects of your installation.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP enabled',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Settings',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
    'ldap_server_cert'			=> 'LDAP SSL certificate validation',
    'ldap_server_cert_ignore'	=> 'Allow invalid SSL Certificate',
    'ldap_server_cert_help'		=> 'Select this checkbox if you are using a self signed SSL cert and would like to accept an invalid SSL certificate.',
    'ldap_tls'                  => 'Use TLS',
    'ldap_tls_help'             => 'This should be checked only if you are running STARTTLS on your LDAP server. ',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords synced with local passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Username Field',
    'ldap_lname_field'          => 'Last Name',
    'ldap_fname_field'          => 'LDAP First Name',
    'ldap_auth_filter_query'    => 'LDAP Authentication query',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'LDAP Employee Number',
    'ldap_email'                => 'LDAP Email',
    'license'                  => 'Software License',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'This Snipe-IT install can load scripts from the outside world.',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Optionally include a few sentences on your login screen, for example to assist people who have found a lost or stolen device. This field accepts <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will be redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Restricting users (including admins) assigned to companies to their company\'s assets.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'optional',
    'per_page'                  => 'Results Per Page',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'You must install php-gd to display QR codes, see install instructions.',
    'php_gd_warning'            => 'PHP Image Processing and GD plugin is NOT installed.',
    'pwd_secure_complexity'     => 'Password Complexity',
    'pwd_secure_complexity_help' => 'Select whichever password complexity rules you wish to enforce.',
    'pwd_secure_min'            => 'Password minimum characters',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Prevent common passwords',
    'pwd_secure_uncommon_help'  => 'This will disallow users from using common passwords from the top 10,000 passwords reported in breaches.',
    'qr_help'                   => 'Enable QR Codes first to set this',
    'qr_text'                   => 'QR Code Text',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Setting',
    'settings'                  => 'Settings',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Site Name',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who can see the Snipe-IT version and build number.',
    'system'                    => 'System Information',
    'update'                    => 'Update Settings',
    'value'                     => 'Value',
    'brand'                     => 'Branding',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'About Settings',
    'about_settings_text'       => 'These settings let you customize certain aspects of your installation.',
    'labels_per_page'           => 'Labels per page',
    'label_dimensions'          => 'Label dimensions (inches)',
    'next_auto_tag_base'        => 'Next auto-increment',
    'page_padding'              => 'Page margins (inches)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Purge Deleted Records',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link to Snipe-IT in Emails',
    'show_url_in_emails_help_text'      => 'Uncheck this box if you do not wish to link back to your Snipe-IT installation in your email footers. Useful if most of your users never login. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximum height in pixels that thumbnails may display in the listing view. Min 25, max 500.',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Selective (Users can enable or disable if permitted)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Require Signature',
    'require_accept_signature_help_text'      => 'Enabling this feature will require users to physically sign off on accepting an asset.',
    'left'        => 'left',
    'right'        => 'right',
    'top'        => 'top',
    'bottom'        => 'bottom',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Ticking this box will enforce a uniqueness constraint on asset serial numbers',
    'zerofill_count'        => 'Length of asset tags, including zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
