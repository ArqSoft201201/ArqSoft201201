<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-06 19:12:55 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 30 ]
2012-05-06 19:12:55 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-06 19:12:56 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 15 ]
2012-05-06 19:12:56 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-06 19:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 19:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 19:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 19:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 19:19:43 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 15 ]
2012-05-06 19:19:43 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-06 19:20:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 19:20:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 19:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-06 19:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-06 19:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-06 19:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-06 19:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-06 19:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-06 23:54:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
2012-05-06 23:54:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-06 23:54:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
2012-05-06 23:54:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-06 23:55:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
2012-05-06 23:55:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-06 23:57:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
2012-05-06 23:57:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-06 23:57:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
2012-05-06 23:57:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}