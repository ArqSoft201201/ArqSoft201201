<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-04 00:20:11 --- ERROR: ErrorException [ 2 ]: include(/statement/statement.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\sgri.php [ 2 ]
2012-04-04 00:20:11 --- STRACE: ErrorException [ 2 ]: include(/statement/statement.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\sgri.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\sgri.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include()
#2 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#3 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#4 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#5 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#6 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#7 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#8 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#9 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#13 {main}
2012-04-04 00:20:54 --- ERROR: ErrorException [ 2 ]: include(driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
2012-04-04 00:20:54 --- STRACE: ErrorException [ 2 ]: include(driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:21:29 --- ERROR: ErrorException [ 2 ]: include(../driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
2012-04-04 00:21:29 --- STRACE: ErrorException [ 2 ]: include(../driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:22:15 --- ERROR: ErrorException [ 2 ]: include(sgri/application/classes/model/driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
2012-04-04 00:22:15 --- STRACE: ErrorException [ 2 ]: include(sgri/application/classes/model/driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:23:07 --- ERROR: ErrorException [ 2 ]: include(sgri/application/classes/model/driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
2012-04-04 00:23:07 --- STRACE: ErrorException [ 2 ]: include(sgri/application/classes/model/driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:23:19 --- ERROR: ErrorException [ 2 ]: include(localhost/sgri/application/classes/model/driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
2012-04-04 00:23:19 --- STRACE: ErrorException [ 2 ]: include(localhost/sgri/application/classes/model/driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:23:29 --- ERROR: ErrorException [ 2 ]: include(../driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
2012-04-04 00:23:29 --- STRACE: ErrorException [ 2 ]: include(../driver/driverfactory.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:24:06 --- ERROR: ErrorException [ 2 ]: include(driver/oracledriver.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 2 ]
2012-04-04 00:24:06 --- STRACE: ErrorException [ 2 ]: include(driver/oracledriver.php) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\driver\driverfactory.php [ 2 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\driver\driverfactory.php(2): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\driver\driverfactory.php(2): include()
#2 C:\wamp\www\sgri\application\classes\model\statement\statement.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#4 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#5 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#6 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#7 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#8 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#9 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#10 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#14 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#15 {main}
2012-04-04 00:25:53 --- ERROR: ErrorException [ 2 ]: include(sgri/application/config/database) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 3 ]
2012-04-04 00:25:53 --- STRACE: ErrorException [ 2 ]: include(sgri/application/config/database) [function.include]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 3 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(3): Kohana_Core::error_handler('Model_Sgri')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(3): include()
#2 C:\wamp\www\sgri\application\classes\model\sgri.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Sgri')
#5 C:\wamp\www\sgri\application\classes\model\equipamento.php(9): spl_autoload_call('Model_Equipamen...')
#6 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#7 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#8 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#9 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#10 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#11 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#13 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#14 {main}
2012-04-04 00:37:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Equipamento::obterTodosProdutos() ~ APPPATH\classes\controller\teste.php [ 9 ]
2012-04-04 00:37:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Equipamento::obterTodosProdutos() ~ APPPATH\classes\controller\teste.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-04 00:39:24 --- ERROR: ErrorException [ 1 ]: Class 'Statement' not found ~ APPPATH\classes\model\equipamento.php [ 7 ]
2012-04-04 00:39:24 --- STRACE: ErrorException [ 1 ]: Class 'Statement' not found ~ APPPATH\classes\model\equipamento.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-04 00:39:38 --- ERROR: ErrorException [ 1 ]: Class 'DriverFactory' not found ~ APPPATH\classes\model\statement\statement.php [ 33 ]
2012-04-04 00:39:38 --- STRACE: ErrorException [ 1 ]: Class 'DriverFactory' not found ~ APPPATH\classes\model\statement\statement.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-04 00:41:31 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'USERNAME' ~ APPPATH\classes\model\statement\statement.php [ 34 ]
2012-04-04 00:41:31 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'USERNAME' ~ APPPATH\classes\model\statement\statement.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-04 00:44:25 --- ERROR: ErrorException [ 2 ]: include_once(../../../config/database.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 5 ]
2012-04-04 00:44:25 --- STRACE: ErrorException [ 2 ]: include_once(../../../config/database.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 5 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(5): Kohana_Core::error_handler('Model_Equipamen...')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(5): include_once()
#2 C:\wamp\www\sgri\application\classes\model\equipamento.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#5 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#6 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-04 00:44:42 --- ERROR: ErrorException [ 2 ]: include_once(/../../../config/database.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 5 ]
2012-04-04 00:44:42 --- STRACE: ErrorException [ 2 ]: include_once(/../../../config/database.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 5 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(5): Kohana_Core::error_handler('Model_Equipamen...')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(5): include_once()
#2 C:\wamp\www\sgri\application\classes\model\equipamento.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#5 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#6 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-04 00:44:47 --- ERROR: ErrorException [ 2 ]: include_once(/../../../config/database.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 5 ]
2012-04-04 00:44:47 --- STRACE: ErrorException [ 2 ]: include_once(/../../../config/database.php) [function.include-once]: failed to open stream: No such file or directory ~ APPPATH\classes\model\statement\statement.php [ 5 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(5): Kohana_Core::error_handler('Model_Equipamen...')
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(5): include_once()
#2 C:\wamp\www\sgri\application\classes\model\equipamento.php(2): include('C:\wamp\www\sgr...')
#3 C:\wamp\www\sgri\system\classes\kohana\core.php(496): require('C:\wamp\www\sgr...')
#4 [internal function]: Kohana_Core::auto_load('Model_Equipamen...')
#5 C:\wamp\www\sgri\application\classes\controller\teste.php(7): spl_autoload_call()
#6 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#11 {main}
2012-04-04 00:44:51 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'USERNAME' ~ APPPATH\classes\model\statement\statement.php [ 34 ]
2012-04-04 00:44:51 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'USERNAME' ~ APPPATH\classes\model\statement\statement.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-04 00:51:01 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'USERNAME' ~ APPPATH\classes\model\statement\statement.php [ 34 ]
2012-04-04 00:51:01 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'USERNAME' ~ APPPATH\classes\model\statement\statement.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-04 12:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-04 12:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-04 12:57:49 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\statement\statement.php [ 265 ]
2012-04-04 12:57:49 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\statement\statement.php [ 265 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(265): Kohana_Core::error_handler(NULL)
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(35): Statement->setConnection()
#2 C:\wamp\www\sgri\application\classes\model\statement\statement.php(49): Statement->__construct()
#3 C:\wamp\www\sgri\application\classes\model\equipamento.php(7): Statement::getInstance()
#4 C:\wamp\www\sgri\application\classes\controller\teste.php(9): Model_Equipamento->obterTodosEquipamentos()
#5 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-04 12:59:17 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\statement\statement.php [ 265 ]
2012-04-04 12:59:17 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Statement::setConnection() must be an instance of PDO, null given, called in C:\wamp\www\sgri\application\classes\model\statement\statement.php on line 35 and defined ~ APPPATH\classes\model\statement\statement.php [ 265 ]
--
#0 C:\wamp\www\sgri\application\classes\model\statement\statement.php(265): Kohana_Core::error_handler(NULL)
#1 C:\wamp\www\sgri\application\classes\model\statement\statement.php(35): Statement->setConnection()
#2 C:\wamp\www\sgri\application\classes\model\statement\statement.php(49): Statement->__construct()
#3 C:\wamp\www\sgri\application\classes\model\equipamento.php(7): Statement::getInstance()
#4 C:\wamp\www\sgri\application\classes\controller\teste.php(9): Model_Equipamento->obterTodosEquipamentos()
#5 [internal function]: Controller_Teste->action_index(Object(Controller_Teste))
#6 C:\wamp\www\sgri\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 C:\wamp\www\sgri\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\sgri\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#9 C:\wamp\www\sgri\index.php(109): Kohana_Request->execute()
#10 {main}
2012-04-04 13:03:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Equipamento::obterTodosEquipamentos() ~ APPPATH\classes\controller\teste.php [ 9 ]
2012-04-04 13:03:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Equipamento::obterTodosEquipamentos() ~ APPPATH\classes\controller\teste.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}