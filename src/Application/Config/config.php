<?php 
/**
 * Force a default protocol to be used by the site. If no site_protocol is
 * specified, then the current protocol is used, or when possible, only an
 * absolute path (with no protocol/domain) is used.
 */
$config['site_protocol'] = '';

/**
 * Name of the front controller for this application. Default: index.php
 *
 * This can be removed by using URL rewriting.
 */
$config['index_page'] = '';

/**
 * Fake file extension that will be added to all generated URLs. Example: .html
 */
$config['url_suffix'] = '';

/**
 * Length of time of the internal cache in seconds. 0 or FALSE means no caching.
 * The internal cache stores file paths and config entries across requests and
 * can give significant speed improvements at the expense of delayed updating.
 */
$config['internal_cache'] = 0;

/**
 * Enable or disable gzip output compression. This can dramatically decrease
 * server bandwidth usage, at the cost of slightly higher CPU usage. Set to
 * the compression level (1-9) that you want to use, or FALSE to disable.
 *
 * Do not enable this option if you are using output compression in php.ini!
 */
$config['output_compression'] = FALSE;

/**
 * Enable or disable global XSS filtering of GET, POST, and SERVER data. This
 * option also accepts a string to specify a specific XSS filtering tool.
 */
$config['global_xss_filtering'] = FALSE;

/**
 * Enable or disable hooks. Setting this option to TRUE will enable
 * all hooks. By using an array of hook filenames, you can control
 * which hooks are enabled. Setting this option to FALSE disables hooks.
 */
$config['enable_hooks'] = FALSE;

/**
 * Log thresholds:
 *  0 - Disable logging
 *  1 - Errors and exceptions
 *  2 - Warnings
 *  3 - Notices
 *  4 - Debugging
 *  5 - Testing
 */
$config['log_threshold'] = 2;

/**
 * Message logging directory.
 */
$config['log_directory'] = DOCROOT."..".DIRECTORY_SEPARATOR.'logs/phpill';

/**
 * Enable or disable displaying of Phpill error pages. This will not affect
 * logging. Turning this off will disable ALL error pages.
 */
$config['display_errors'] = true;

/**
 * Enable or disable statistics in the final output. Stats are replaced via
 * specific strings, such as {execution_time}.
 *
 * @see http://docs.phpillphp.com/general/configuration
 */
$config['render_stats'] = true;

/**
 * Additional resource paths, or "modules". Each path can either be absolute
 * or relative to the docroot. Modules can include any resource that can exist
 * in your application directory, configuration files, controllers, views, etc.
 */
$config['modules'] = array
(
	MODPATH.'Minion',//任务模块
	MODPATH.'Core',//核心模块
);


/**
 * Base path of the web site. If this includes a domain, eg: localhost/phpill/
 * then a full URL will be used, eg: http://localhost/phpill/. If it only includes
 * the path, and a site_protocol is specified, the domain will be auto-detected.
 */
$config['site_domain'] = 'firedev.kai-ying.com/';
$config['meida_domain'] = 'http://static.firedev.kai-ying.com/';
$config['server_name'] = 'dev';//动态php差异化配置地址
