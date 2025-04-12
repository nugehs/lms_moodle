<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'moodle-db.cng88u24qci6.us-east-1.rds.amazonaws.com';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodleadmin';
$CFG->dbpass    = 'MoodleAdmin123!';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->smtphosts = 's691.lon1.mysecurecloudhost.com:465';
$CFG->smtpsecure = 'ssl';        // Use SSL for port 465
$CFG->smtpuser = 'hello@aline.online';
$CFG->smtppass = 'hello@aline';  // Replace with actual password
$CFG->smtpauthtype = 'LOGIN';
$CFG->noreplyaddress = 'hello@aline.online';
$CFG->emailonlyfromnoreplyaddress = true;

$CFG->wwwroot   = 'https://moodle.aline.online';
$CFG->dataroot  = '/var/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
$CFG->cronclionly = false;


// Add these lines to your existing config.php
$CFG->maxexecutiontime = 600;    // Execution time in seconds
$CFG->maxmemory = '512M';        // Memory limit
$CFG->maxupload = 128;           // Upload size limit in MB
$CFG->curlseckeepalive = true;   // Keep connections alive

// These help with timeout issues
$CFG->sessiontimeout = 7200;     // Session timeout in seconds (2 hours)
$CFG->sessioncookiepath = '/';
$CFG->curlconnecttimeout = 300;  // Connection timeout for curl

$CFG->sessioncookiesecure = true;
$CFG->cookieprefix = 'mdl_';      // Add unique prefix
$CFG->sessionhhdr = true;

// Session handling improvements
$CFG->sessioncookie = 'MoodleSession';    // Standardize session cookie name
$CFG->sessioncookiedomain = '.aline.online';  // Match your domain
$CFG->sessionkeepalive = 300;     // 5 minute keepalive
$CFG->sessiontimeoutwarning = 1200;  // Show timeout warning after 20 minutes
$CFG->session_handler_class = '\core\session\file';
$CFG->session_file_save_path = '/var/moodledata/sessions';  // Dedicated session path


$CFG->restore_general_users_setting = 0;
$CFG->restore_general_users = 0;
$CFG->restore_general_groups = 0;
$CFG->restore_general_role_assignments = 0;
$CFG->restore_general_activities = 1;
$CFG->restore_general_blocks = 0;
$CFG->restore_general_filters = 0;
$CFG->restore_general_comments = 0;
$CFG->restore_general_badges = 0;
$CFG->restore_general_calendarevents = 0;
$CFG->restore_general_userscompletion = 0;
$CFG->restore_general_logs = 0;
$CFG->restore_general_histories = 0;
$CFG->cachejs = true;
$CFG->enableasyncbackup = true;
$CFG->backup_auto_max_kept = 3;
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
