<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-07 00:01:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 3 ]
2012-06-07 00:01:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 3 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\formularioUsuarios.php(3): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(128): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_form(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-07 00:15:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 3 ]
2012-06-07 00:15:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 3 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\formularioUsuarios.php(3): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(128): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_form(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-07 00:24:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  codfun ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 19 ]
2012-06-07 00:24:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  codfun ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 19 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\formularioUsuarios.php(19): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(129): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_form(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-07 00:32:32 --- ERROR: Exception [ 900 ]: OCIStmtExecute: ORA-00900: instrução SQL inválida
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
2012-06-07 00:32:32 --- STRACE: Exception [ 900 ]: OCIStmtExecute: ORA-00900: instrução SQL inválida
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
--
#0 C:\wamp\www\sgri\application\classes\model\funcionario.php(252): Statement->fetchAll(' OR CODFUN = (S...')
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(106): Model_Funcionario::obterTodosFuncionariosSemUsuario('1')
#2 [internal function]: Controller_Usuario->action_form()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 00:41:16 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 144 ]
2012-06-07 00:41:16 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 144 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(144): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 00:50:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: senha ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 21 ]
2012-06-07 00:50:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: senha ~ APPPATH\views\parte\usuario\formularioUsuarios.php [ 21 ]
--
#0 C:\wamp\www\sgri\application\views\parte\usuario\formularioUsuarios.php(21): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(132): Kohana_View->render()
#4 [internal function]: Controller_Usuario->action_form(Object(Controller_Usuario))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-07 00:58:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 00:58:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:10:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:10:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:12:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:12:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:12:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:12:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:15:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:15:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:15:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:15:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:16:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:16:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:16:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
2012-06-07 01:16:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  confirmacao ~ APPPATH\classes\controller\usuario.php [ 151 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(151): Kohana_Core::error_handler()
#1 [internal function]: Controller_Usuario->action_salvar(Object(Controller_Usuario))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-07 01:19:25 --- ERROR: Exception [ 904 ]: OCIStmtExecute: ORA-00904: "UNDEFINED": identificador inválido
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
2012-06-07 01:19:25 --- STRACE: Exception [ 904 ]: OCIStmtExecute: ORA-00904: "UNDEFINED": identificador inválido
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\statement\statement.php [ 135 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(180): Statement->fetchAll('SELECT * FROM U...')
#1 C:\wamp\www\sgri\application\classes\model\usuario.php(179): Statement->fetchRow('SELECT * FROM U...')
#2 C:\wamp\www\sgri\application\classes\model\usuario.php(30): Model_Usuario->_obterEntidade('undefined')
#3 C:\wamp\www\sgri\application\classes\controller\usuario.php(190): Model_Usuario->__construct('undefined')
#4 [internal function]: Controller_Usuario->action_excluir()
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-07 01:44:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:02 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:44:02 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:44:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-07 01:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-07 01:44:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:44:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:44:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-07 01:45:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/reserva.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-07 01:45:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:45:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:45:59 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:45:59 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:46:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:46:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:46:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:46:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:46:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:46:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:46:20 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:46:20 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:46:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:46:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:46:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:46:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:46:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:46:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:46:48 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:46:48 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:47:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:47:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:47:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:47:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:47:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:47:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:47:55 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:47:55 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:48:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:09 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:48:09 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:48:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:22 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:48:22 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 01:48:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 01:48:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 01:48:33 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 01:48:33 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:12:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:12:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:12:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:12:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:12:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:12:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:12:45 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 02:12:45 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:12:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:12:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:12:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:12:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:12:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:12:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:12:59 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 02:12:59 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:13:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:11 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 02:13:11 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:13:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:36 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 02:13:36 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:13:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:13:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:13:48 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 02:13:48 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:14:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:14:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:14:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:14:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:14:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:14:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(30): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_index(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:14:01 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
2012-06-07 02:14:01 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 52 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:16:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:16:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:16:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:16:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao/funcionar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao/funcionar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:16:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(39): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:16:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:16:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao/jturma was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao/jturma was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:16:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(39): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:16:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:16:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(50): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_turma(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(39): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(50): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_turma(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:17:33 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 74 ]
2012-06-07 02:17:33 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 74 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:17:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(39): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 02:17:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(50): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_turma(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 02:17:44 --- ERROR: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 74 ]
2012-06-07 02:17:44 --- STRACE: Exception [ 8 ]: Undefined index:  file ~ APPPATH\classes\controller\importacao.php [ 74 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:46:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Funcionario::validaCadastroFuncionario() ~ APPPATH\classes\controller\importacao.php [ 119 ]
2012-06-07 02:46:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Funcionario::validaCadastroFuncionario() ~ APPPATH\classes\controller\importacao.php [ 119 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-07 02:47:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Funcionario::getCoddis() ~ APPPATH\classes\model\funcionario.php [ 177 ]
2012-06-07 02:47:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Funcionario::getCoddis() ~ APPPATH\classes\model\funcionario.php [ 177 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-07 02:48:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Exception::getCoddis() ~ APPPATH\classes\model\funcionario.php [ 203 ]
2012-06-07 02:48:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Exception::getCoddis() ~ APPPATH\classes\model\funcionario.php [ 203 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-07 02:48:41 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."FUNCIONARIO"."EMAILFUN")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 72 ]
2012-06-07 02:48:41 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."FUNCIONARIO"."EMAILFUN")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 72 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:49:56 --- ERROR: Exception [ 1 ]: OCIStmtExecute: ORA-00001: restrição exclusiva (SGRI.SYS_C006307) violada
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 72 ]
2012-06-07 02:49:56 --- STRACE: Exception [ 1 ]: OCIStmtExecute: ORA-00001: restrição exclusiva (SGRI.SYS_C006307) violada
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 72 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 02:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 02:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 02:51:05 --- ERROR: Exception [ 1 ]: OCIStmtExecute: ORA-00001: restrição exclusiva (SGRI.SYS_C006307) violada
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 72 ]
2012-06-07 02:51:05 --- STRACE: Exception [ 1 ]: OCIStmtExecute: ORA-00001: restrição exclusiva (SGRI.SYS_C006307) violada
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 72 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 14:10:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 14:10:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 14:10:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 14:10:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 14:10:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 14:10:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 14:10:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 14:10:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(40): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_turma(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 16:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-07 16:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importacao was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-07 16:38:36 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 16:38:36 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 16:52:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 16:52:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 16:52:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 16:52:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 16:52:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 16:52:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 16:52:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 16:52:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(40): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_turma(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 16:53:36 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 16:53:36 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 16:55:57 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 16:55:57 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:05:16 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 17:05:16 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:09:06 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 17:09:06 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:12:14 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 17:12:14 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:16:25 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 17:16:25 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:21:40 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 17:21:40 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:25:23 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
2012-06-07 17:25:23 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."TURMA"."CODHOR")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\controller\importacao.php [ 73 ]
--
#0 [internal function]: Controller_importacao->action_upload()
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-06-07 17:28:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 17:28:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\usuario.php(32): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 17:28:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 17:28:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\recurso.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_Recurso->action_grid(Object(Controller_Recurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 17:28:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 17:28:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(29): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_funcionario(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-07 17:28:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
2012-06-07 17:28:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  USUARIO ~ APPPATH\classes\controller\login.php [ 78 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\login.php(78): Kohana_Core::error_handler(Array)
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(40): Controller_Login::validaPermissao()
#2 [internal function]: Controller_importacao->action_turma(Object(Controller_importacao))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}