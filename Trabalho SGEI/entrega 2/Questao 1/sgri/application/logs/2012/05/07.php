<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-07 00:01:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
2012-05-07 00:01:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 43 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-07 00:10:25 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 29 ]
2012-05-07 00:10:25 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Login' not found ~ APPPATH\classes\controller\recurso.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-07 00:12:28 --- ERROR: ErrorException [ 1 ]: Call to a member function getTpusuario() on a non-object ~ APPPATH\classes\controller\login.php [ 67 ]
2012-05-07 00:12:28 --- STRACE: ErrorException [ 1 ]: Call to a member function getTpusuario() on a non-object ~ APPPATH\classes\controller\login.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-05-07 00:15:13 --- ERROR: ErrorException [ 1 ]: Call to a member function getTpusuario() on a non-object ~ APPPATH\classes\controller\login.php [ 68 ]
2012-05-07 00:15:13 --- STRACE: ErrorException [ 1 ]: Call to a member function getTpusuario() on a non-object ~ APPPATH\classes\controller\login.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-05-07 00:29:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 63 ]
2012-05-07 00:29:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 63 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(63): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 00:41:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
2012-05-07 00:41:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(64): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 00:56:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 65 ]
2012-05-07 00:56:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 65 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(65): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:01:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
2012-05-07 01:01:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(64): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:04:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 63 ]
2012-05-07 01:04:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 63 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(63): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:07:44 --- ERROR: ErrorException [ 1 ]: Controller_Login::validaPermissao() [controller-login.validapermissao]: The script tried to execute a method or access a property of an incomplete object. Please ensure that the class definition &quot;Model_Usuario&quot; of the object you are trying to operate on was loaded _before_ unserialize() gets called or provide a __autoload() function to load the class definition  ~ APPPATH\classes\controller\login.php [ 65 ]
2012-05-07 01:07:44 --- STRACE: ErrorException [ 1 ]: Controller_Login::validaPermissao() [controller-login.validapermissao]: The script tried to execute a method or access a property of an incomplete object. Please ensure that the class definition &quot;Model_Usuario&quot; of the object you are trying to operate on was loaded _before_ unserialize() gets called or provide a __autoload() function to load the class definition  ~ APPPATH\classes\controller\login.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-05-07 01:09:18 --- ERROR: ErrorException [ 1 ]: Controller_Login::validaPermissao() [controller-login.validapermissao]: The script tried to execute a method or access a property of an incomplete object. Please ensure that the class definition &quot;Model_Usuario&quot; of the object you are trying to operate on was loaded _before_ unserialize() gets called or provide a __autoload() function to load the class definition  ~ APPPATH\classes\controller\login.php [ 65 ]
2012-05-07 01:09:18 --- STRACE: ErrorException [ 1 ]: Controller_Login::validaPermissao() [controller-login.validapermissao]: The script tried to execute a method or access a property of an incomplete object. Please ensure that the class definition &quot;Model_Usuario&quot; of the object you are trying to operate on was loaded _before_ unserialize() gets called or provide a __autoload() function to load the class definition  ~ APPPATH\classes\controller\login.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Array)
#1 {main}
2012-05-07 01:17:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
2012-05-07 01:17:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(64): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:19:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
2012-05-07 01:19:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(66): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:19:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
2012-05-07 01:19:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(66): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:19:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
2012-05-07 01:19:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(66): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:19:46 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
2012-05-07 01:19:46 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 66 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(66): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:20:57 --- ERROR: ErrorException [ 1 ]: Class 'OracleDriver' not found ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 20 ]
2012-05-07 01:20:57 --- STRACE: ErrorException [ 1 ]: Class 'OracleDriver' not found ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('SGRI', 'SGRI', 'localhost', 'xe')
#1 {main}
2012-05-07 01:21:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
2012-05-07 01:21:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\login.php [ 64 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(64): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-07 01:26:58 --- ERROR: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\classes\controller\login.php [ 63 ]
2012-05-07 01:26:58 --- STRACE: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\classes\controller\login.php [ 63 ]
--
#0 [internal function]: Kohana_Core::error_handler()
#1 C:\wamp\www\sgri\application\classes\controller\login.php(63): session_start(Array)
#2 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(24): Controller_Usuario->action_grid()
#4 [internal function]: Controller_Usuario->action_index(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}