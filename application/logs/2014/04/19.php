<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-19 08:56:16 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 're_password' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /opt/lampp/htdocs/system/classes/Kohana/Valid.php:548
2014-04-19 08:56:16 --- DEBUG: #0 /opt/lampp/htdocs/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/opt/lampp/htdo...', 548, Array)
#1 [internal function]: Kohana_Valid::matches('cheq0501', 're_password', 'password')
#2 /opt/lampp/htdocs/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /opt/lampp/htdocs/application/classes/Controller/Auth.php(69): Kohana_Validation->check()
#4 /opt/lampp/htdocs/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 /opt/lampp/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/system/classes/Kohana/Valid.php:548
2014-04-19 09:23:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Parent' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-19 09:23:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 09:24:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Parent' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-19 09:24:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line