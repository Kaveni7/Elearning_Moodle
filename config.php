<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
// $CFG->dbhost    = 'mtoto-dev.c1wo2cgeif36.af-south-1.rds.amazonaws.com';
$CFG->dbhost    = 'localhost'; 
$CFG->dbname    = 'moodle_core';
 $CFG->dbuser    = 'moodle_dev_user';
 $CFG->dbpass    = 'mo0dl3@5pr!ngette';
 $CFG->prefix    = 'mdl_';
 $CFG->dboptions = array (
   'dbpersist' => 0,
   'dbport' => 5432,
   'dbsocket' => '',
 );
// Commenting out the wwwroot and dataroot settings
 $CFG->wwwroot   = 'http://localhost';
 $CFG->dataroot  = '/var/www/html/moodledata';
 $CFG->admin     = 'admin';


// Commenting out the theme setting
// $CFG->theme = 'boost_magnific';

// Debug settings for troubleshooting
//@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
//$CFG->debug = (E_ALL | E_STRICT);
//$CFG->debugdisplay = 1;

//$CFG->debug = 0; // disable debugging messages/
//$CFG->debug = (E_ALL | E_STRICT);
//$CFG->debugdisplay = 1;
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
