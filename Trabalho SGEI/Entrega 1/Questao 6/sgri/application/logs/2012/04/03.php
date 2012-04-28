<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-03 00:35:24 --- ERROR: ErrorException [ 1 ]: Call to private Database_Oracle::__construct() from context 'Kohana_Database' ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2012-04-03 00:35:24 --- STRACE: ErrorException [ 1 ]: Call to private Database_Oracle::__construct() from context 'Kohana_Database' ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('default')
#1 {main}
2012-04-03 00:35:55 --- ERROR: ErrorException [ 1 ]: Call to private Database_Oracle::__construct() from context 'Kohana_Database' ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2012-04-03 00:35:55 --- STRACE: ErrorException [ 1 ]: Call to private Database_Oracle::__construct() from context 'Kohana_Database' ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('default')
#1 {main}
2012-04-03 22:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/model/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-03 22:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/classes/model/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}