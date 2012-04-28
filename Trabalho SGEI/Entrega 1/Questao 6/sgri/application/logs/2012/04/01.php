<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-01 23:22:34 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
2012-04-01 23:22:34 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to UtilTemplate::carregaCabecalhoGrid() must be an array, string given, called in C:\wamp\www\sgri\application\views\template\grid.php on line 27 and defined ~ APPPATH\views\template\utilTemplate.php [ 58 ]
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