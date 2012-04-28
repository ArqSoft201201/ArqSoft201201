<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-06 02:37:42 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\statement\statement.php [ 278 ]
2012-04-06 02:37:42 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\statement\statement.php [ 278 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(278): Kohana_Core::error_handler(NULL)
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(35): Statement->setConnection()
#2 C:\wamp\www\sgri\application\classes\model\statement\statement.php(49): Statement->__construct()
#3 C:\wamp\www\sgri\application\classes\model\recurso.php(442): Statement::getInstance(1)
#4 C:\wamp\www\sgri\application\classes\model\recurso.php(110): Model_Recurso->_obterEntidade(1)
#5 C:\wamp\www\sgri\application\classes\controller\teste.php(7): Model_Recurso->__construct()
#6 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-06 02:41:16 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: cssFiles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-04-06 02:41:16 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: cssFiles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\template\formtemplate.php(43): Kohana_View->__get('cssFiles')
#1 [internal function]: Controller_Template_Formtemplate->after()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teste))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 02:41:46 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: jsFiles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-04-06 02:41:46 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: jsFiles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\template\formtemplate.php(44): Kohana_View->__get('jsFiles')
#1 [internal function]: Controller_Template_Formtemplate->after()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teste))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 02:42:02 --- ERROR: ErrorException [ 1 ]: Class 'UtilTemplate' not found ~ APPPATH\views\template\form.php [ 5 ]
2012-04-06 02:42:02 --- STRACE: ErrorException [ 1 ]: Class 'UtilTemplate' not found ~ APPPATH\views\template\form.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-06 02:42:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method UtilTemplate::carregaarquivosjavascript() ~ APPPATH\views\template\form.php [ 6 ]
2012-04-06 02:42:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method UtilTemplate::carregaarquivosjavascript() ~ APPPATH\views\template\form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('C:\wamp\www\sgr...', Array)
#1 {main}
2012-04-06 02:44:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: javascript ~ APPPATH\views\template\form.php [ 6 ]
2012-04-06 02:44:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: javascript ~ APPPATH\views\template\form.php [ 6 ]
--
#0 C:\wamp\www\sgri\application\views\template\form.php(6): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\wamp\www\sgri\application\classes\controller\template\formtemplate.php(47): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template_Formtemplate->after(Object(Controller_Teste))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-06 02:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/teste.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 02:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 02:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 03:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 03:57:25 --- ERROR: View_Exception [ 0 ]: The requested view partes/formulario could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-06 03:57:25 --- STRACE: View_Exception [ 0 ]: The requested view partes/formulario could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('partes/formular...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('partes/formular...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\teste.php(8): Kohana_View::factory('partes/formular...')
#3 [internal function]: Controller_Teste->action_index()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-06 03:57:42 --- ERROR: View_Exception [ 0 ]: The requested view partes/formularioRecursos could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-06 03:57:42 --- STRACE: View_Exception [ 0 ]: The requested view partes/formularioRecursos could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('partes/formular...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('partes/formular...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\teste.php(8): Kohana_View::factory('partes/formular...')
#3 [internal function]: Controller_Teste->action_index()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-06 03:57:51 --- ERROR: View_Exception [ 0 ]: The requested view parte/menu.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-06 03:57:51 --- STRACE: View_Exception [ 0 ]: The requested view parte/menu.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('parte/menu.php')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('parte/menu.php', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\teste.php(7): Kohana_View::factory('parte/menu.php')
#3 [internal function]: Controller_Teste->action_index()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-06 03:58:00 --- ERROR: View_Exception [ 0 ]: The requested view partes/formularioRecursos could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-06 03:58:00 --- STRACE: View_Exception [ 0 ]: The requested view partes/formularioRecursos could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('partes/formular...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('partes/formular...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\teste.php(8): Kohana_View::factory('partes/formular...')
#3 [internal function]: Controller_Teste->action_index()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-06 03:58:21 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: cssFiles ~ SYSPATH\classes\kohana\view.php [ 171 ]
2012-04-06 03:58:21 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: cssFiles ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\template\formtemplate.php(43): Kohana_View->__get('cssFiles')
#1 [internal function]: Controller_Template_Formtemplate->after()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Teste))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 04:00:01 --- ERROR: View_Exception [ 0 ]: The requested view partes/formularioRecursos could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-06 04:00:01 --- STRACE: View_Exception [ 0 ]: The requested view partes/formularioRecursos could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('partes/formular...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('partes/formular...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\teste.php(8): Kohana_View::factory('partes/formular...')
#3 [internal function]: Controller_Teste->action_index()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-06 04:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:17:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:17:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 04:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 04:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:25:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\formularioRecursos.php [ 2 ]
2012-04-06 12:25:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\formularioRecursos.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\views\parte\formularioRecursos.php(2): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\teste.php(13): Kohana_View->render()
#4 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-06 12:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:31:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:31:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:33:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:33:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:36:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:36:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:36:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:36:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:38:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:38:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recurso was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-06 12:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recurso was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-06 12:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recurso/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-06 12:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recurso/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-06 12:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/grid/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: recurso/grid/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recurso/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-06 12:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recurso/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-06 12:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL recurso/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-06 12:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL recurso/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-06 12:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 12:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 12:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 14:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 14:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 14:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 14:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 14:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 14:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 16:11:41 --- ERROR: View_Exception [ 0 ]: The requested view parte/presquisaRecurso could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-06 16:11:41 --- STRACE: View_Exception [ 0 ]: The requested view parte/presquisaRecurso could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('parte/presquisa...')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('parte/presquisa...', NULL)
#2 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(10): Kohana_View::factory('parte/presquisa...')
#3 [internal function]: Controller_Gridrecurso->action_index()
#4 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Gridrecurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-06 16:16:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: recursos ~ APPPATH\views\parte\gridRecurso.php [ 13 ]
2012-04-06 16:16:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: recursos ~ APPPATH\views\parte\gridRecurso.php [ 13 ]
--
#0 C:\wamp\www\sgri\application\views\parte\gridRecurso.php(13): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(17): Kohana_View->render()
#4 [internal function]: Controller_Gridrecurso->action_index(Object(Controller_Gridrecurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-06 16:17:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: arquivosJs ~ APPPATH\views\template\grid.php [ 6 ]
2012-04-06 16:17:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: arquivosJs ~ APPPATH\views\template\grid.php [ 6 ]
--
#0 C:\wamp\www\sgri\application\views\template\grid.php(6): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Gridrecurso))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-06 16:21:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: tablela ~ APPPATH\views\template\grid.php [ 33 ]
2012-04-06 16:21:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: tablela ~ APPPATH\views\template\grid.php [ 33 ]
--
#0 C:\wamp\www\sgri\application\views\template\grid.php(33): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Gridrecurso))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-06 16:31:33 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
2012-04-06 16:31:33 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(7): Model_Recurso->obterCorpoGrid()
#1 [internal function]: Controller_Gridrecurso->action_index()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Gridrecurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 16:34:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\formularioRecursos.php [ 2 ]
2012-04-06 16:34:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: nome ~ APPPATH\views\parte\formularioRecursos.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\views\parte\formularioRecursos.php(2): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\formrecurso.php(12): Kohana_View->render()
#4 [internal function]: Controller_Formrecurso->action_index(Object(Controller_Formrecurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-06 16:40:38 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
2012-04-06 16:40:38 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(7): Model_Recurso->obterCorpoGrid()
#1 [internal function]: Controller_Gridrecurso->action_index()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Gridrecurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 16:42:36 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
2012-04-06 16:42:36 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(7): Model_Recurso->obterCorpoGrid()
#1 [internal function]: Controller_Gridrecurso->action_index()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Gridrecurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 16:45:58 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
2012-04-06 16:45:58 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(7): Model_Recurso->obterCorpoGrid()
#1 [internal function]: Controller_Gridrecurso->action_index()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Gridrecurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 16:46:10 --- ERROR: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
2012-04-06 16:46:10 --- STRACE: Exception [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\recurso.php [ 423 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(7): Model_Recurso->obterCorpoGrid()
#1 [internal function]: Controller_Gridrecurso->action_index()
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Gridrecurso))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-06 16:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 16:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 16:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 16:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 16:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 16:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:12:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: sala ~ APPPATH\views\parte\formularioRecursos.php [ 8 ]
2012-04-06 17:12:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: sala ~ APPPATH\views\parte\formularioRecursos.php [ 8 ]
--
#0 C:\wamp\www\sgri\application\views\parte\formularioRecursos.php(8): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\formrecurso.php(17): Kohana_View->render()
#4 [internal function]: Controller_Formrecurso->action_index(Object(Controller_Formrecurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-06 17:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ] [ 1126 ]
2012-04-06 17:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaaaa.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: aaaaa.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/libraries/grid.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/libraries/grid.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/libraries/grid.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/libraries/grid.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:55:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:55:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 17:59:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 17:59:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:00:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:00:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:07:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:07:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 18:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 18:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:07:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:07:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formUser.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formUser.html ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:19:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:19:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:27:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:27:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:38:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:38:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 19:44:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 19:44:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}}
2012-04-06 20:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:15:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:15:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:43:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:43:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:44:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:44:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]]
2012-04-06 20:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 20:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 20:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:19:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:19:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: formrecurso/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:31:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: formPesquisa ~ APPPATH\views\template\grid.php [ 27 ]
2012-04-06 21:31:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: formPesquisa ~ APPPATH\views\template\grid.php [ 27 ]
--
#0 C:\wamp\www\sgri\application\views\template\grid.php(27): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\teste.php(31): Kohana_View->render()
#4 [internal function]: Controller_Teste->action_grid(Object(Controller_Teste))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-06 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 21:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 21:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:01:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:01:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 22:06:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 22:06:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/recursos.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/recursos.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/recursos.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/recursos.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/recursos.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/recursos.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:09:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:09:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:25:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:25:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:38:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:38:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:52:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  STATUS ~ APPPATH\views\parte\gridRecurso.php [ 28 ]
2012-04-06 23:52:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  STATUS ~ APPPATH\views\parte\gridRecurso.php [ 28 ]
--
#0 C:\wamp\www\sgri\application\views\parte\gridRecurso.php(28): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\application\classes\controller\gridrecurso.php(18): Kohana_View->render()
#4 [internal function]: Controller_Gridrecurso->action_index(Object(Controller_Gridrecurso))
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-06 23:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: teste/images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropdown.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionleft.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-06 23:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-06 23:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/dropselectionright.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}