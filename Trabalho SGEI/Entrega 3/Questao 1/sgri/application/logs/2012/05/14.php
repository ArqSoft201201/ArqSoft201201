<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-14 18:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-14 18:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-14 18:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-14 18:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-14 18:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: importar.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-14 18:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: importar.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-14 18:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: importar.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-14 18:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: importar.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-14 18:25:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:25:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:25:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:25:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:25:50 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-05-14 18:25:50 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-05-14 18:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: importar.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-14 18:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: importar.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-14 18:27:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:27:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:27:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:27:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:27:03 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-05-14 18:27:03 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-05-14 18:27:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:27:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:27:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:27:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:27:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
2012-05-14 18:27:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 72 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(72): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 18:27:14 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-05-14 18:27:14 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-05-14 21:06:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 42 ]
2012-05-14 21:06:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  nome ~ APPPATH\classes\controller\login.php [ 42 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Login->action_log(Object(Controller_Login))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-14 21:08:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 73 ]
2012-05-14 21:08:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 73 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(73): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:22:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:22:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:22:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:00 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-05-14 21:22:00 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-05-14 21:22:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:22:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:22:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:22:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:22:11 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-05-14 21:22:11 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-05-14 21:32:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:32:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:32:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:32:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-05-14 21:32:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
2012-05-14 21:32:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 80 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(80): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}