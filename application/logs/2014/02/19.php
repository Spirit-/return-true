<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-19 09:40:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Misc::flashinfo() must be an instance of string, string given, called in D:\dev\return-true\application\classes\Controller\Auth.php on line 24 and defined ~ APPPATH\classes\Misc.php [ 9 ] in D:\dev\return-true\application\classes\Misc.php:9
2014-02-19 09:40:37 --- DEBUG: #0 D:\dev\return-true\application\classes\Misc.php(9): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\dev\return-t...', 9, Array)
#1 D:\dev\return-true\application\classes\Controller\Auth.php(24): Misc::flashinfo('success', 'B????d logowani...', '/auth')
#2 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#8 {main} in D:\dev\return-true\application\classes\Misc.php:9