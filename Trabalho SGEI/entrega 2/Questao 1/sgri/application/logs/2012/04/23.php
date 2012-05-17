<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-23 17:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 17:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 17:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 17:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 17:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 17:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 17:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 17:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 17:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 17:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 17:41:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 17:41:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 17:52:41 --- ERROR: ErrorException [ 2 ]: include(db/statement/statement.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\usuario.php [ 2 ]
2012-04-23 17:52:41 --- STRACE: ErrorException [ 2 ]: include(db/statement/statement.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\usuario.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\usuario.php(2): Kohana_Core::error_handler('Model_Usuario')
#1 C:\wamp\www\sgri\application\classes\model\usuario.php(2): include()
#2 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#3 [internal function]: Kohana_Core::auto_load('Model_Usuario')
#4 C:\wamp\www\sgri\application\classes\controller\usuario.php(15): spl_autoload_call()
#5 [internal function]: Controller_Usuario->action_grid(Object(Controller_Usuario))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-23 17:53:10 --- ERROR: Exception [ 900 ]: OCIStmtExecute: ORA-00900: instrução SQL inválida
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 316 ]
2012-04-23 17:53:10 --- STRACE: Exception [ 900 ]: OCIStmtExecute: ORA-00900: instrução SQL inválida
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 316 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\usuario.php(18): Model_Usuario->obterCorpoGrid()
#1 [internal function]: Controller_Usuario->action_grid()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Usuario))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-23 17:56:06 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH\classes\controller\usuario.php [ 19 ]
2012-04-23 17:56:06 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH\classes\controller\usuario.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_usua...')
#1 {main}
2012-04-23 18:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importausuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-23 18:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importausuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-23 18:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importausuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-23 18:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importausuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-23 18:48:05 --- ERROR: ErrorException [ 1 ]: Class 'ExportaDadosProfessor' not found ~ APPPATH\classes\controller\importadadosusuario.php [ 139 ]
2012-04-23 18:48:05 --- STRACE: ErrorException [ 1 ]: Class 'ExportaDadosProfessor' not found ~ APPPATH\classes\controller\importadadosusuario.php [ 139 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_impo...')
#1 {main}
2012-04-23 18:48:40 --- ERROR: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importadadosusuario.php [ 56 ]
2012-04-23 18:48:40 --- STRACE: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importadadosusuario.php [ 56 ]
--
#0 [internal function]: Controller_ImportaDadosUsuario->__construct(Object(Request), Object(Response))
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-04-23 18:48:57 --- ERROR: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importadadosusuario.php [ 56 ]
2012-04-23 18:48:57 --- STRACE: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importadadosusuario.php [ 56 ]
--
#0 [internal function]: Controller_ImportaDadosUsuario->__construct(Object(Request), Object(Response))
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-04-23 18:49:05 --- ERROR: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importadadosusuario.php [ 56 ]
2012-04-23 18:49:05 --- STRACE: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importadadosusuario.php [ 56 ]
--
#0 [internal function]: Controller_importadadosusuario->__construct(Object(Request), Object(Response))
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-04-23 18:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL importadadosusuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-23 18:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL importadadosusuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-23 18:49:29 --- ERROR: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importacao.php [ 56 ]
2012-04-23 18:49:29 --- STRACE: Exception [ 0 ]: Arquivo não encontrado. ~ APPPATH\classes\controller\importacao.php [ 56 ]
--
#0 [internal function]: Controller_importacao->__construct(Object(Request), Object(Response))
#1 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#5 {main}
2012-04-23 18:54:13 --- ERROR: ErrorException [ 1 ]: Class 'ExportaDadosProfessor' not found ~ APPPATH\classes\controller\importacao.php [ 14 ]
2012-04-23 18:54:13 --- STRACE: ErrorException [ 1 ]: Class 'ExportaDadosProfessor' not found ~ APPPATH\classes\controller\importacao.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-23 18:55:05 --- ERROR: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
2012-04-23 18:55:05 --- STRACE: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\importacao.php(89): Model_Usuario->persistir()
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(17): Controller_importacao->_importarRegistros()
#2 [internal function]: Controller_importacao->action_index()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-23 23:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 23:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 23:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 23:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 23:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}}
2012-04-23 23:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 23:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 23:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 23:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 23:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-23 23:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-23 23:51:55 --- ERROR: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
2012-04-23 23:51:55 --- STRACE: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\importacao.php(89): Model_Usuario->persistir()
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(17): Controller_importacao->_importarRegistros()
#2 [internal function]: Controller_importacao->action_index()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-23 23:56:09 --- ERROR: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 127 ]
2012-04-23 23:56:09 --- STRACE: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 127 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\importacao.php(89): Model_Usuario->persistir()
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(17): Controller_importacao->_importarRegistros()
#2 [internal function]: Controller_importacao->action_index()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-23 23:57:12 --- ERROR: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
2012-04-23 23:57:12 --- STRACE: Exception [ 932 ]: OCIStmtExecute: ORA-00932: tipos de dados inconsistentes: esperava NUMBER obteve DATE
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\importacao.php(89): Model_Usuario->persistir()
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(17): Controller_importacao->_importarRegistros()
#2 [internal function]: Controller_importacao->action_index()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-23 23:59:57 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."USUARIO"."IDUSUATIVO")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
2012-04-23 23:59:57 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."USUARIO"."IDUSUATIVO")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\importacao.php(89): Model_Usuario->persistir()
#1 C:\wamp\www\sgri\application\classes\controller\importacao.php(17): Controller_importacao->_importarRegistros()
#2 [internal function]: Controller_importacao->action_index()
#3 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_importacao))
#4 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#7 {main}