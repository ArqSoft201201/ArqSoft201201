<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-28 00:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-28 00:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-28 00:41:09 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\classes\model\usuario.php [ 432 ]
2012-04-28 00:41:09 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\classes\model\usuario.php [ 432 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Usuario')
#1 {main}
2012-04-28 02:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:06:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]p [ 1126 ]
2012-04-28 02:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:06:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:07:13 --- ERROR: Exception [ 936 ]: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
2012-04-28 02:07:13 --- STRACE: Exception [ 936 ]: OCIStmtExecute: ORA-00936: expressão não encontrada
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(180): Statement->fetchAll('SELECT * FROM U...')
#1 C:\wamp\www\sgri\application\classes\model\usuario.php(436): Statement->fetchRow('SELECT * FROM U...')
#2 C:\wamp\www\sgri\application\classes\model\usuario.php(88): Model_Usuario->_obterEntidade(NULL)
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(25): Model_Usuario->__construct()
#4 [internal function]: Controller_Usuario->action_grid()
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-28 02:09:03 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
2012-04-28 02:09:03 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:09:12 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
2012-04-28 02:09:12 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:09:33 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
2012-04-28 02:09:33 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:09:54 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-04-28 02:09:54 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:19:25 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-04-28 02:19:25 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:21:11 --- ERROR: Exception [ 918 ]: OCIStmtExecute: ORA-00918: coluna definida de maneira ambígua
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 369 ]
2012-04-28 02:21:11 --- STRACE: Exception [ 918 ]: OCIStmtExecute: ORA-00918: coluna definida de maneira ambígua
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 369 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(26): Model_Usuario->obterCorpoGrid(NULL, NULL)
#1 [internal function]: Controller_Usuario->action_grid()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-28 02:21:34 --- ERROR: Exception [ 918 ]: OCIStmtExecute: ORA-00918: coluna definida de maneira ambígua
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 370 ]
2012-04-28 02:21:34 --- STRACE: Exception [ 918 ]: OCIStmtExecute: ORA-00918: coluna definida de maneira ambígua
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 370 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(26): Model_Usuario->obterCorpoGrid(NULL, NULL)
#1 [internal function]: Controller_Usuario->action_grid()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-28 02:23:06 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-04-28 02:23:06 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:23:37 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-04-28 02:23:37 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:23:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:23:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:25:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: usuarios ~ APPPATH\views\parte\recurso\gridRecurso.php [ 21 ]
2012-04-28 02:25:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: usuarios ~ APPPATH\views\parte\recurso\gridRecurso.php [ 21 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(21): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(64): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-28 02:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:25:50 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 18 ]
2012-04-28 02:25:50 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Usuario as array ~ APPPATH\views\parte\usuario\gridUsuario.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-28 02:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:28:25 --- ERROR: ErrorException [ 8 ]: Undefined index:  IDUSUATIVO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 22 ]
2012-04-28 02:28:25 --- STRACE: ErrorException [ 8 ]: Undefined index:  IDUSUATIVO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(52): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-28 02:28:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  IDUSUATIVO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 22 ]
2012-04-28 02:28:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  IDUSUATIVO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(52): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-28 02:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:29:42 --- ERROR: ErrorException [ 8 ]: Undefined index:  IDUSUATIVO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 22 ]
2012-04-28 02:29:42 --- STRACE: ErrorException [ 8 ]: Undefined index:  IDUSUATIVO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(52): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-28 02:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 02:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 02:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 03:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 03:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 03:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 03:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 03:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 03:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 03:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuariogrid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-28 03:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuariogrid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-28 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 03:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 03:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 21:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 21:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 21:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 21:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 21:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:01:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:01:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario/usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-28 22:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario/usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-28 22:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:13:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:13:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:16:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:16:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:45:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\controller\usuario.php [ 71 ]
2012-04-28 22:45:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\controller\usuario.php [ 71 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(71): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_form(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-28 22:52:52 --- ERROR: View_Exception [ 0 ]: The requested view parte/recurso/formularioUsuarios could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-28 22:52:52 --- STRACE: View_Exception [ 0 ]: The requested view parte/recurso/formularioUsuarios could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('parte/recurso/f...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('parte/recurso/f...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\usuario.php(94): Kohana_View::factory('parte/recurso/f...')
#3 [internal function]: Controller_Usuario->action_form()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-28 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 22:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 22:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 23:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario/usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-28 23:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario/usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-28 23:14:31 --- ERROR: View_Exception [ 0 ]: The requested view parte/recurso/formularioUsuarios could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-28 23:14:31 --- STRACE: View_Exception [ 0 ]: The requested view parte/recurso/formularioUsuarios could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('parte/recurso/f...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('parte/recurso/f...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\usuario.php(94): Kohana_View::factory('parte/recurso/f...')
#3 [internal function]: Controller_Usuario->action_form()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-28 23:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 23:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 23:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 23:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-28 23:55:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-28 23:55:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}