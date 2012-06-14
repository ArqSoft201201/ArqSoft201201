<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-26 21:21:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Teste::$respose ~ APPPATH\classes\controller\teste.php [ 6 ]
2012-03-26 21:21:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Teste::$respose ~ APPPATH\classes\controller\teste.php [ 6 ]
--
#0 C:\wamp\www\sgri\application\classes\controller\teste.php(6): Kohana_Core::error_handler()
#1 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#2 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-26 21:35:28 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Templates_Gridtemplate' not found ~ APPPATH\classes\controller\teste.php [ 2 ]
2012-03-26 21:35:28 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Templates_Gridtemplate' not found ~ APPPATH\classes\controller\teste.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_test...')
#1 {main}
2012-03-26 21:35:57 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Template_Gridtemplate' not found ~ APPPATH\classes\controller\teste.php [ 2 ]
2012-03-26 21:35:57 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Template_Gridtemplate' not found ~ APPPATH\classes\controller\teste.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_test...')
#1 {main}
2012-03-26 21:36:42 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Template_Gridtemplate' not found ~ APPPATH\classes\controller\teste.php [ 2 ]
2012-03-26 21:36:42 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Template_Gridtemplate' not found ~ APPPATH\classes\controller\teste.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_test...')
#1 {main}
2012-03-26 21:37:02 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\html.php [ 237 ]
2012-03-26 21:37:02 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\html.php [ 237 ]
--
#0 [internal function]: Kohana_Core::error_handler('Array', '://')
#1 C:\wamp\www\sgri\system\classes\kohana\html.php(237): strpos(Array)
#2 C:\wamp\www\sgri\application\views\template\utilTemplate.php(27): Kohana_HTML::script(Array)
#3 C:\wamp\www\sgri\application\views\template\grid.php(8): UtilTemplate::carregaArquivosJavascript('C:\wamp\www\sgr...', Array)
#4 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#5 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#6 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#7 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(45): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#9 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-26 21:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 21:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 21:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-1.7.1.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 23:53:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 23:53:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/css/hot-sneaks/jquery-ui-1.8.18.custom.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}