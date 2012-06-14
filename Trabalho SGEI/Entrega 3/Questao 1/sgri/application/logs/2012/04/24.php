<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-24 00:12:33 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."USUARIO"."IDUSUATIVO")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
2012-04-24 00:12:33 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."USUARIO"."IDUSUATIVO")
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
2012-04-24 00:12:57 --- ERROR: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."USUARIO"."IDUSUATIVO")
 (ext\pdo_oci\oci_statement.c:146) ~ APPPATH\classes\model\usuario.php [ 125 ]
2012-04-24 00:12:57 --- STRACE: Exception [ 1400 ]: OCIStmtExecute: ORA-01400: não é possível inserir NULL em ("SGRI"."USUARIO"."IDUSUATIVO")
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
2012-04-24 19:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-24 19:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-24 19:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-24 19:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL usuario was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-24 19:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:47:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:47:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 19:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 19:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:10:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:10:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usuario/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-24 20:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-24 20:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}