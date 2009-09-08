#!/usr/bin/env php
<?php
/**
 * ====================================================================
 * commit-update-tickets.php: scan commit logs for ticket numbers
 * denoted by a flexible regular expression and post the log message
 * and a link to the changeset diff in a comment to those tickets.
 *
 * Usage: commit-update-tickets.php PATH_TO_REPO REVISION
 *
 * @category Horde
 * @package  devtools
 */


/**
 ** Includes
 **/

require_once 'Horde/Autoloader.php';


/**
 ** Initialize expected values to rule out pre-existing input by any
 ** means, then include our configuration file.
 **/

$git = $rpc_endpoint = $rpc_method = null;
$rpc_options = array();

include dirname(__FILE__) . '/commit-update-tickets-conf.php';


/**
 ** Sanity checks
 **/

if (!is_executable($git)) {
    abort("Required program $git is not executable.");
}

if (is_null($rpc_endpoint) || is_null($rpc_method)) {
    abort("Required XML-RPC configuration is missing or incomplete.");
}

if (count($_SERVER['argv']) != 3) {
    usage();
}


/**
 ** Command-line parsing
 **/

$repo = $_SERVER['argv'][1];
$rev = $_SERVER['argv'][2];

if (!file_exists($repo)) {
    abort("Repository $repo does not exist.");
}

if (!is_dir($repo)) {
    abort("Repository $repo is not a directory.");
}


/**
 ** Read the log message for this revision
 **/

// Run git show to get the log message for this revision
$log_message = shell_exec(implode(' ', array(
    escapeshellcmd($git),
    '--git-dir=' . escapeshellarg($repo),
    'show',
    '--summary',
    '--pretty=format:%s',
    escapeshellarg($rev)
)));

if (!empty($log_message)) {
    $tickets = find_tickets($log_message);
    if (count($tickets)) {
        foreach ($tickets as $ticket) {
            post_comment($ticket, $log_message);
        }
    }
}

exit(0);


/**
 ** Functions
 **/

function abort($msg) {
    fputs(STDERR, $msg . "\n");
    exit(1);
}

function usage() {
    abort("usage: commit-update-tickets.php PATH_TO_REPO REVISION");
}

function find_tickets($log_message) {
    preg_match_all('/(?:(?:bug|ticket|request|enhancement|issue):?\s*#?|#)(\d+)/i', $log_message, $matches);
    return array_unique($matches[1]);
}

function post_comment($ticket, $log_message) {
    $result = Horde_Rpc::request(
        'xmlrpc',
        $GLOBALS['rpc_endpoint'],
        $GLOBALS['rpc_method'],
        array((int)$ticket, $log_message),
        $GLOBALS['rpc_options']);

    if (is_a($result, 'PEAR_Error')) {
        abort($result->getMessage());
    }

    return true;
}
