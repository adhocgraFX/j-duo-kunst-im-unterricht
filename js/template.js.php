<?php

// required header info and character set
header("Content-type: application/x-javascript");
// cache control to process
header("Cache-Control: must-revalidate");
// duration of cached content (1 hour)
$offset = 60 * 60 ;
// expiration header format
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s",time() + $offset) . " GMT";
// send cache expiration header to broswer
header($ExpStr);

// load scripts
require('classie.min.js');
require('responsiveslides.min.js');
require('jquery.cookie.min.js');
require('jquery.textresizer.min.js');
require('jquery.fs.boxer.min.js');

// tap <> hover lösung für drop downs
require('doubletaptogo.min.js');

// equal heights bottom row
require('jquery.syncHeight.min.js');
?>