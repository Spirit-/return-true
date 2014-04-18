<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-17 14:26:50 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\blog\index.php [ 11 ] in file:line
2014-04-17 14:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\dev\return-t...', 11, Array)
#1 D:\dev\return-true\application\views\blog\index.php(11): date('Y-m-d', '2014-02-17 14:4...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#3 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#4 D:\dev\return-true\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\dev\return-true\application\views\template.php(71): Kohana_View->__toString()
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
#16 {main} in file:line