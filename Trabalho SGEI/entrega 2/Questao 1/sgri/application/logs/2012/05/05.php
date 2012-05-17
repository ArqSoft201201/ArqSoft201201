<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-05 12:02:46 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 410 ]
2012-05-05 12:02:46 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 410 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\recurso.php(37): Model_Recurso->obterCorpoGrid(NULL, NULL)
#1 [internal function]: Controller_Recurso->action_grid()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-05 12:02:50 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 410 ]
2012-05-05 12:02:50 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 410 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\recurso.php(37): Model_Recurso->obterCorpoGrid(NULL, NULL)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(15): Controller_Recurso->action_grid()
#2 [internal function]: Controller_Recurso->action_index()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Recurso))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}