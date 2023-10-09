<?php
/**
 * Default Constants
 *
 * @package wp-fail2ban
 * @since 4.2.0
 */
namespace org\lecklider\charles\wordpress\wp_fail2ban;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Allow custom openlog options.
 * e.g. you may not want the PID if logging remotely.
 *
 * @since 3.6.0     Add LOG_NDELAY
 * @since 3.5.0
 */
if (!defined('WP_FAIL2BAN_OPENLOG_OPTIONS')) {
    define('WP_FAIL2BAN_OPENLOG_OPTIONS', DEFAULT_WP_FAIL2BAN_OPENLOG_OPTIONS);
}
/**
 * Make sure all custom logs are defined.
 * @since 3.5.0
 */
if (!defined('WP_FAIL2BAN_AUTH_LOG')) {
    define('WP_FAIL2BAN_AUTH_LOG', DEFAULT_WP_FAIL2BAN_AUTH_LOG);
}
if (!defined('WP_FAIL2BAN_COMMENT_LOG')) {
    define('WP_FAIL2BAN_COMMENT_LOG', DEFAULT_WP_FAIL2BAN_COMMENT_LOG);
}
if (!defined('WP_FAIL2BAN_PINGBACK_LOG')) {
    define('WP_FAIL2BAN_PINGBACK_LOG', DEFAULT_WP_FAIL2BAN_PINGBACK_LOG);
}
/**
 * @since 4.0.0
 */
if (!defined('WP_FAIL2BAN_PASSWORD_REQUEST_LOG')) {
    define('WP_FAIL2BAN_PASSWORD_REQUEST_LOG', DEFAULT_WP_FAIL2BAN_PASSWORD_REQUEST_LOG);
}
if (!defined('WP_FAIL2BAN_SPAM_LOG')) {
    define('WP_FAIL2BAN_SPAM_LOG', DEFAULT_WP_FAIL2BAN_SPAM_LOG);
}
/**
 * @since 4.0.5
 */
if (!defined('WP_FAIL2BAN_COMMENT_EXTRA_LOG')) {
    define('WP_FAIL2BAN_COMMENT_EXTRA_LOG', DEFAULT_WP_FAIL2BAN_COMMENT_EXTRA_LOG);
}
if (!defined('WP_FAIL2BAN_PINGBACK_ERROR_LOG')) {
    define('WP_FAIL2BAN_PINGBACK_ERROR_LOG', DEFAULT_WP_FAIL2BAN_PINGBACK_ERROR_LOG);
}
/**
 * @since 4.2.0
 */
if (!defined('WP_FAIL2BAN_PLUGIN_AUTH_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_AUTH_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_AUTH_LOG);
}
if (!defined('WP_FAIL2BAN_PLUGIN_COMMENT_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_COMMENT_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_COMMENT_LOG);
}
if (!defined('WP_FAIL2BAN_PLUGIN_OTHER_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_OTHER_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_OTHER_LOG);
}
if (!defined('WP_FAIL2BAN_PLUGIN_PASSWORD_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_PASSWORD_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_PASSWORD_LOG);
}
if (!defined('WP_FAIL2BAN_PLUGIN_REST_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_REST_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_REST_LOG);
}
if (!defined('WP_FAIL2BAN_PLUGIN_SPAM_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_SPAM_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_SPAM_LOG);
}
if (!defined('WP_FAIL2BAN_PLUGIN_XMLRPC_LOG')) {
    define('WP_FAIL2BAN_PLUGIN_XMLRPC_LOG', DEFAULT_WP_FAIL2BAN_PLUGIN_XMLRPC_LOG);
}

