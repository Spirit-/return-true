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
2014-04-19 16:41:00 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\template.php [ 66 ] in file:line
2014-04-19 16:41:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-19 16:48:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 95 ] in D:\dev\return-true\application\views\template.php:95
2014-04-19 16:48:42 --- DEBUG: #0 D:\dev\return-true\application\views\template.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\dev\return-t...', 95, Array)
#1 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#3 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\dev\return-true\application\classes\Controller\Base.php(60): Kohana_Controller_Template->after()
#5 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#11 {main} in D:\dev\return-true\application\views\template.php:95
2014-04-19 18:46:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\classes\Controller\Blog.php [ 30 ] in D:\dev\return-true\application\classes\Controller\Blog.php:30
2014-04-19 18:46:39 --- DEBUG: #0 D:\dev\return-true\application\classes\Controller\Blog.php(30): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\dev\return-t...', 30, Array)
#1 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Blog->action_addarticle()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#7 {main} in D:\dev\return-true\application\classes\Controller\Blog.php:30
2014-04-19 19:15:47 --- CRITICAL: Kohana_Exception [ 0 ]: The data property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:603
2014-04-19 19:15:47 --- DEBUG: #0 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('data')
#1 D:\dev\return-true\application\views\blog\show_article.php(29): Kohana_ORM->__get('data')
#2 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#3 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#4 D:\dev\return-true\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\dev\return-true\application\views\template.php(95): Kohana_View->__toString()
#6 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#7 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#8 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\dev\return-true\application\classes\Controller\Base.php(60): Kohana_Controller_Template->after()
#10 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#13 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#16 {main} in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:603
2014-04-19 20:57:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Child' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-19 20:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line