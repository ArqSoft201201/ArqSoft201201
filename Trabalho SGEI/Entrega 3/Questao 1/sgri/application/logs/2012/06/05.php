<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-05 22:39:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
2012-06-05 22:39:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-05 22:40:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
2012-06-05 22:40:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-05 22:46:13 --- ERROR: ErrorException [ 1 ]: Class 'OracleDriver' not found ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 20 ]
2012-06-05 22:46:13 --- STRACE: ErrorException [ 1 ]: Class 'OracleDriver' not found ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('SGRI', 'SGRI', 'localhost', 'xe')
#1 {main}
2012-06-05 22:48:25 --- ERROR: ErrorException [ 1 ]: Class 'OracleDriver' not found ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 20 ]
2012-06-05 22:48:25 --- STRACE: ErrorException [ 1 ]: Class 'OracleDriver' not found ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('SGRI', 'SGRI', 'localhost', 'xe')
#1 {main}
2012-06-05 22:50:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
2012-06-05 22:50:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-05 23:01:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
2012-06-05 23:01:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  login ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-05 23:43:04 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Controller_Login::validaPermissao() must be an array, integer given, called in C:\wamp\www\sgri\application\classes\controller\recurso.php on line 29 and defined ~ APPPATH\classes\controller\login.php [ 71 ]
2012-06-05 23:43:04 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Controller_Login::validaPermissao() must be an array, integer given, called in C:\wamp\www\sgri\application\classes\controller\recurso.php on line 29 and defined ~ APPPATH\classes\controller\login.php [ 71 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(71): Kohana_Core::error_handler(1)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-05 23:49:08 --- ERROR: ErrorException [ 1 ]: Class 'Statement' not found ~ APPPATH\classes\model\usuario.php [ 202 ]
2012-06-05 23:49:08 --- STRACE: ErrorException [ 1 ]: Class 'Statement' not found ~ APPPATH\classes\model\usuario.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('ADMIN', '1')
#1 {main}
2012-06-05 23:49:42 --- ERROR: ErrorException [ 1 ]: Class 'DriverFactory' not found ~ APPPATH\classes\model\statement\statement.php [ 33 ]
2012-06-05 23:49:42 --- STRACE: ErrorException [ 1 ]: Class 'DriverFactory' not found ~ APPPATH\classes\model\statement\statement.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-05 23:52:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
2012-06-05 23:52:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Usuario')
#1 {main}
2012-06-05 23:53:29 --- ERROR: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
2012-06-05 23:53:29 --- STRACE: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Usuario')
#1 {main}