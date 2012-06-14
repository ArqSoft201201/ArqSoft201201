<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-29 00:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-29 00:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-29 20:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-29 20:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-29 20:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-29 20:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-29 20:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-29 20:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-29 20:32:28 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
2012-03-29 20:32:28 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(58): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:33:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-29 20:33:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-29 20:33:46 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
2012-03-29 20:33:46 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(58): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:33:55 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
2012-03-29 20:33:55 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(58): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:36:24 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
2012-03-29 20:36:24 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(58): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:36:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\utilTemplate.php [ 62 ]
2012-03-29 20:36:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\utilTemplate.php [ 62 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(62): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:37:05 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\utilTemplate.php [ 63 ]
2012-03-29 20:37:05 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\template\utilTemplate.php [ 63 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(63): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:37:11 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCorpoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 30 and defined ~ APPPATH\views\template\utilTemplate.php [ 73 ]
2012-03-29 20:37:11 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCorpoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 30 and defined ~ APPPATH\views\template\utilTemplate.php [ 73 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(73): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(30): UtilTemplate::carregaCorpoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-29 20:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: files/js/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-29 20:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL teste/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-29 20:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL teste/grid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-29 20:37:58 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
2012-03-29 20:37:58 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
--
#0 C:\wamp\www\sgri\application\views\template\utilTemplate.php(58): Kohana_Core::error_handler('')
#1 C:\wamp\www\sgri\application\views\template\grid.php(27): UtilTemplate::carregaCabecalhoGrid('C:\wamp\www\sgr...', Array)
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#4 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 C:\wamp\www\sgri\application\classes\controller\template\gridtemplate.php(47): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Template_Gridtemplate->after(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-29 20:39:00 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-03-29 20:39:00 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 C:\wamp\www\sgri\application\classes\controller\template\formtemplate.php(13): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Template_Formtemplate->before()
#5 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Teste))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-29 20:41:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: botoes ~ APPPATH\views\template\form.php [ 22 ]
2012-03-29 20:41:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: botoes ~ APPPATH\views\template\form.php [ 22 ]
--
#0 C:\wamp\www\sgri\application\views\template\form.php(22): Kohana_Core::error_handler('C:\wamp\www\sgr...', Array)
#1 C:\wamp\www\sgri\system\classes\kohana\view.php(61): include('C:\wamp\www\sgr...')
#2 C:\wamp\www\sgri\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 C:\wamp\www\sgri\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 C:\wamp\www\sgri\application\classes\controller\template\formtemplate.php(42): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Template_Formtemplate->after(Object(Controller_Teste))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}