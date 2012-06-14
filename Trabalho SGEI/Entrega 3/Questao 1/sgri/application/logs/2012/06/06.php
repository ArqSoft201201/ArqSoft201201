<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-06 00:20:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
2012-06-06 00:20:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Usuario')
#1 {main}
2012-06-06 00:37:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
2012-06-06 00:37:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:38:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: recurso ~ APPPATH\views\parte\recurso\gridRecurso.php [ 21 ]
2012-06-06 00:38:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: recurso ~ APPPATH\views\parte\recurso\gridRecurso.php [ 21 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(21): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:38:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: recurso ~ APPPATH\views\parte\recurso\gridRecurso.php [ 21 ]
2012-06-06 00:38:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: recurso ~ APPPATH\views\parte\recurso\gridRecurso.php [ 21 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(21): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:40:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
2012-06-06 00:40:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:40:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
2012-06-06 00:40:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:40:26 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
2012-06-06 00:40:26 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:41:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
2012-06-06 00:41:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Usuario')
#1 {main}
2012-06-06 00:43:44 --- ERROR: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
2012-06-06 00:43:44 --- STRACE: ErrorException [ 1 ]: Class 'Model_Util' not found ~ APPPATH\classes\model\usuario.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Usuario')
#1 {main}
2012-06-06 00:48:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
2012-06-06 00:48:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 00:49:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
2012-06-06 00:49:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDRECURSO ~ APPPATH\views\parte\recurso\gridRecurso.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\gridRecurso.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(74): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 19:26:08 --- ERROR: Exception [ 904 ]: OCIStmtExecute: ORA-00904: "UNDEFINED": identificador inválido
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
2012-06-06 19:26:08 --- STRACE: Exception [ 904 ]: OCIStmtExecute: ORA-00904: "UNDEFINED": identificador inválido
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(180): Statement->fetchAll('SELECT * FROM R...')
#1 C:\wamp\www\sgri\application\classes\model\recurso.php(264): Statement->fetchRow('SELECT * FROM R...')
#2 C:\wamp\www\sgri\application\classes\model\recurso.php(39): Model_Recurso->_obterEntidade('undefined')
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(150): Model_Recurso->__construct('undefined')
#4 [internal function]: Controller_Recurso->action_salvar()
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Recurso))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 19:43:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\views\parte\recurso\formularioRecursos.php [ 32 ]
2012-06-06 19:43:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\views\parte\recurso\formularioRecursos.php [ 32 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\formularioRecursos.php(32): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(129): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_form(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 19:46:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\views\parte\recurso\formularioRecursos.php [ 32 ]
2012-06-06 19:46:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\views\parte\recurso\formularioRecursos.php [ 32 ]
--
#0 C:\wamp\www\sgri\application\views\parte\recurso\formularioRecursos.php(32): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(129): Kohana_View->render()
#4 [internal function]: Controller_Recurso->action_form(Object(Controller_Recurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 20:16:24 --- ERROR: Exception [ 904 ]: OCIStmtExecute: ORA-00904: "UNDEFINED": identificador inválido
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
2012-06-06 20:16:24 --- STRACE: Exception [ 904 ]: OCIStmtExecute: ORA-00904: "UNDEFINED": identificador inválido
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(180): Statement->fetchAll('SELECT * FROM R...')
#1 C:\wamp\www\sgri\application\classes\model\recurso.php(264): Statement->fetchRow('SELECT * FROM R...')
#2 C:\wamp\www\sgri\application\classes\model\recurso.php(39): Model_Recurso->_obterEntidade('undefined')
#3 C:\wamp\www\sgri\application\classes\controller\recurso.php(182): Model_Recurso->__construct('undefined')
#4 [internal function]: Controller_Recurso->action_excluir()
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Recurso))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 20:16:30 --- ERROR: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\controller\recurso.php [ 181 ]
2012-06-06 20:16:30 --- STRACE: ErrorException [ 8 ]: Undefined index:  codigo ~ APPPATH\classes\controller\recurso.php [ 181 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\recurso.php(181): Kohana_Core::error_handler()
#1 [internal function]: Controller_Recurso->action_excluir(Object(Controller_Recurso))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-06 20:17:30 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDUSUARIO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-06-06 20:17:30 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDUSUARIO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(19): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(75): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 20:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/formDisc.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-06 20:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/formDisc.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-06 20:19:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:19:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:19:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:19:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:19:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:19:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:23:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:23:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:23:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:23:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:23:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:23:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:23:17 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-06 20:23:17 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-06 20:25:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:06 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-06 20:25:06 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-06 20:25:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-06 20:25:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-06 20:25:51 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 55 ]
2012-06-06 20:25:51 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 55 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-06 20:26:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDUSUARIO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-06-06 20:26:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDUSUARIO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(19): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(75): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 20:27:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  CDUSUARIO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
2012-06-06 20:27:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  CDUSUARIO ~ APPPATH\views\parte\usuario\gridUsuario.php [ 19 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(19): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(75): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 20:31:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  NOMUSU ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
2012-06-06 20:31:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  NOMUSU ~ APPPATH\views\parte\usuario\gridUsuario.php [ 21 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\gridUsuario.php(21): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(75): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 20:33:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 3 ]
2012-06-06 20:33:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 3 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\formularioUsuarios.php(3): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(134): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_form(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-06 23:56:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: ativo ~ APPPATH\classes\controller\usuario.php [ 59 ]
2012-06-06 23:56:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: ativo ~ APPPATH\classes\controller\usuario.php [ 59 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(59): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-06 23:56:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: ativo ~ APPPATH\classes\controller\usuario.php [ 59 ]
2012-06-06 23:56:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: ativo ~ APPPATH\classes\controller\usuario.php [ 59 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(59): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-06 23:57:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: ativo ~ APPPATH\classes\controller\usuario.php [ 59 ]
2012-06-06 23:57:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: ativo ~ APPPATH\classes\controller\usuario.php [ 59 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(59): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}