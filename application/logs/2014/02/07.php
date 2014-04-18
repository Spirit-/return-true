<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-07 12:17:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\dev\return-true\system\classes\Kohana\Cookie.php:67
2014-02-07 12:17:53 --- DEBUG: #0 D:\dev\return-true\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('wp-settings-1', NULL)
#1 D:\dev\return-true\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('wp-settings-1')
#2 D:\dev\return-true\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\dev\return-true\system\classes\Kohana\Cookie.php:67
2014-02-07 12:17:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\dev\return-true\system\classes\Kohana\Cookie.php:67
2014-02-07 12:17:53 --- DEBUG: #0 D:\dev\return-true\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('wp-settings-1', NULL)
#1 D:\dev\return-true\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('wp-settings-1')
#2 D:\dev\return-true\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\dev\return-true\system\classes\Kohana\Cookie.php:67
2014-02-07 13:30:37 --- CRITICAL: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 102 ] in D:\dev\return-true\system\classes\Kohana\Request\Client.php:114
2014-02-07 13:30:37 --- DEBUG: #0 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#3 {main} in D:\dev\return-true\system\classes\Kohana\Request\Client.php:114
2014-02-07 14:49:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Auth::response() ~ APPPATH\classes\Controller\Base.php [ 28 ] in file:line
2014-02-07 14:49:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-07 15:21:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 11 ] in D:\dev\return-true\application\views\template.php:11
2014-02-07 15:21:16 --- DEBUG: #0 D:\dev\return-true\application\views\template.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\dev\return-t...', 11, Array)
#1 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#3 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\dev\return-true\application\classes\Controller\Base.php(53): Kohana_Controller_Template->after()
#5 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#11 {main} in D:\dev\return-true\application\views\template.php:11
2014-02-07 15:32:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 11 ] in D:\dev\return-true\application\views\template.php:11
2014-02-07 15:32:32 --- DEBUG: #0 D:\dev\return-true\application\views\template.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\dev\return-t...', 11, Array)
#1 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#3 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\dev\return-true\application\classes\Controller\Base.php(55): Kohana_Controller_Template->after()
#5 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#11 {main} in D:\dev\return-true\application\views\template.php:11
2014-02-07 16:03:41 --- CRITICAL: ErrorException [ 1 ]: Class 'From' not found ~ APPPATH\views\auth\index.php [ 9 ] in file:line
2014-02-07 16:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-07 16:04:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'username' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`login` AS `login`, `user`.`password` AS `password`, `user`.`e-mail` AS `e-mail`, `user`.`avatar` AS `avatar`, `user`.`signature` AS `signature`, `user`.`first_name` AS `first_name`, `user`.`last_name` AS `last_name`, `user`.`nick` AS `nick`, `user`.`exp` AS `exp`, `user`.`birthdate` AS `birthdate`, `user`.`join_date` AS `join_date`, `user`.`last_login` AS `last_login`, `user`.`city` AS `city` FROM `users` AS `user` WHERE `username` = 'asd' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 16:04:20 --- DEBUG: #0 D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 D:\dev\return-true\modules\orm\classes\Kohana\Auth\ORM.php(80): Kohana_ORM->find()
#4 D:\dev\return-true\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('asd', 'asda', false)
#5 D:\dev\return-true\application\classes\Controller\Auth.php(18): Kohana_Auth->login('asd', 'asda')
#6 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#12 {main} in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 20:39:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Validation::callback() ~ APPPATH\classes\Controller\Auth.php [ 59 ] in file:line
2014-02-07 20:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-07 20:58:02 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::min_length() ~ SYSPATH\classes\Kohana\Valid.php [ 49 ] in D:\dev\return-true\system\classes\Kohana\Valid.php:49
2014-02-07 20:58:02 --- DEBUG: #0 D:\dev\return-true\system\classes\Kohana\Valid.php(49): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\dev\return-t...', 49, Array)
#1 [internal function]: Kohana_Valid::min_length('6')
#2 D:\dev\return-true\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 D:\dev\return-true\application\classes\Controller\Auth.php(59): Kohana_Validation->check()
#4 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#10 {main} in D:\dev\return-true\system\classes\Kohana\Valid.php:49
2014-02-07 21:00:50 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::max_length() ~ SYSPATH\classes\Kohana\Valid.php [ 61 ] in D:\dev\return-true\system\classes\Kohana\Valid.php:61
2014-02-07 21:00:50 --- DEBUG: #0 D:\dev\return-true\system\classes\Kohana\Valid.php(61): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\dev\return-t...', 61, Array)
#1 [internal function]: Kohana_Valid::max_length('16')
#2 D:\dev\return-true\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 D:\dev\return-true\application\classes\Controller\Auth.php(60): Kohana_Validation->check()
#4 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#10 {main} in D:\dev\return-true\system\classes\Kohana\Valid.php:61
2014-02-07 21:01:13 --- CRITICAL: ReflectionException [ 0 ]: Function match() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in D:\dev\return-true\system\classes\Kohana\Validation.php:396
2014-02-07 21:01:13 --- DEBUG: #0 D:\dev\return-true\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('match')
#1 D:\dev\return-true\application\classes\Controller\Auth.php(60): Kohana_Validation->check()
#2 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#8 {main} in D:\dev\return-true\system\classes\Kohana\Validation.php:396
2014-02-07 21:02:19 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Validation::$password ~ APPPATH\classes\Model\User.php [ 19 ] in D:\dev\return-true\application\classes\Model\User.php:19
2014-02-07 21:02:19 --- DEBUG: #0 D:\dev\return-true\application\classes\Model\User.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\dev\return-t...', 19, Array)
#1 D:\dev\return-true\application\classes\Controller\Auth.php(62): Model_User->register(Object(Validation))
#2 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#8 {main} in D:\dev\return-true\application\classes\Model\User.php:19
2014-02-07 21:11:35 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:702
2014-02-07 21:11:35 --- DEBUG: #0 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('email', 'pawel@xelium.pl')
#1 D:\dev\return-true\application\classes\Model\User.php(23): Kohana_ORM->__set('email', 'pawel@xelium.pl')
#2 D:\dev\return-true\application\classes\Controller\Auth.php(62): Model_User->register(Object(Validation))
#3 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#9 {main} in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:702
2014-02-07 21:17:38 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 21:17:38 --- DEBUG: #0 D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 D:\dev\return-true\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 D:\dev\return-true\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pawel', 'pawel12', false)
#5 D:\dev\return-true\application\classes\Controller\Auth.php(18): Kohana_Auth->login('pawel', 'pawel12')
#6 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#12 {main} in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 21:19:36 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 21:19:36 --- DEBUG: #0 D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 D:\dev\return-true\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 D:\dev\return-true\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pawel', 'pawel12', false)
#5 D:\dev\return-true\application\classes\Controller\Auth.php(18): Kohana_Auth->login('pawel', 'pawel12')
#6 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#12 {main} in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 21:26:35 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT COUNT(*) AS `records_found` FROM `` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 21:26:35 --- DEBUG: #0 D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 D:\dev\return-true\modules\orm\classes\Kohana\Auth\ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#4 D:\dev\return-true\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('pawel', 'pawel12', false)
#5 D:\dev\return-true\application\classes\Controller\Auth.php(18): Kohana_Auth->login('pawel', 'pawel12')
#6 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#12 {main} in D:\dev\return-true\modules\database\classes\Kohana\Database\Query.php:251
2014-02-07 21:34:02 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be an array, object given, called in D:\dev\return-true\application\classes\Controller\Auth.php on line 62 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 775 ] in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:775
2014-02-07 21:34:02 --- DEBUG: #0 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\dev\return-t...', 775, Array)
#1 D:\dev\return-true\application\classes\Controller\Auth.php(62): Kohana_ORM->values(Object(Validation))
#2 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#8 {main} in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:775
2014-02-07 21:36:53 --- CRITICAL: Kohana_Exception [ 0 ]: The logins property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:702
2014-02-07 21:36:53 --- DEBUG: #0 D:\dev\return-true\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('logins', Object(Database_Expression))
#1 D:\dev\return-true\modules\orm\classes\Model\Auth\User.php(88): Kohana_ORM->__set('logins', Object(Database_Expression))
#2 D:\dev\return-true\modules\orm\classes\Kohana\Auth\ORM.php(274): Model_Auth_User->complete_login()
#3 D:\dev\return-true\modules\orm\classes\Kohana\Auth\ORM.php(111): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 D:\dev\return-true\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('test1', 'testowe', false)
#5 D:\dev\return-true\application\classes\Controller\Auth.php(18): Kohana_Auth->login('test1', 'testowe')
#6 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#9 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#12 {main} in D:\dev\return-true\modules\orm\classes\Kohana\ORM.php:702
2014-02-07 23:20:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::date() ~ APPPATH\views\profile_edit.php [ 37 ] in file:line
2014-02-07 23:20:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-07 23:31:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\views\profile_edit.php [ 37 ] in D:\dev\return-true\application\views\profile_edit.php:37
2014-02-07 23:31:50 --- DEBUG: #0 D:\dev\return-true\application\views\profile_edit.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\dev\return-t...', 37, Array)
#1 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#3 D:\dev\return-true\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\dev\return-true\application\views\template.php(43): Kohana_View->__toString()
#5 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#6 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#7 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\dev\return-true\application\classes\Controller\Base.php(59): Kohana_Controller_Template->after()
#9 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#15 {main} in D:\dev\return-true\application\views\profile_edit.php:37
2014-02-07 23:43:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: month ~ APPPATH\classes\Controller\User.php [ 26 ] in D:\dev\return-true\application\classes\Controller\User.php:26
2014-02-07 23:43:18 --- DEBUG: #0 D:\dev\return-true\application\classes\Controller\User.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\dev\return-t...', 26, Array)
#1 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_User->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#7 {main} in D:\dev\return-true\application\classes\Controller\User.php:26
2014-02-07 23:44:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: month ~ APPPATH\classes\Controller\User.php [ 26 ] in D:\dev\return-true\application\classes\Controller\User.php:26
2014-02-07 23:44:07 --- DEBUG: #0 D:\dev\return-true\application\classes\Controller\User.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\dev\return-t...', 26, Array)
#1 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_User->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#7 {main} in D:\dev\return-true\application\classes\Controller\User.php:26
2014-02-07 23:47:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: month ~ APPPATH\classes\Controller\User.php [ 27 ] in D:\dev\return-true\application\classes\Controller\User.php:27
2014-02-07 23:47:38 --- DEBUG: #0 D:\dev\return-true\application\classes\Controller\User.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\dev\return-t...', 27, Array)
#1 D:\dev\return-true\system\classes\Kohana\Controller.php(84): Controller_User->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#7 {main} in D:\dev\return-true\application\classes\Controller\User.php:27
2014-02-07 23:50:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\views\profile_edit.php [ 38 ] in D:\dev\return-true\application\views\profile_edit.php:38
2014-02-07 23:50:37 --- DEBUG: #0 D:\dev\return-true\application\views\profile_edit.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\dev\return-t...', 38, Array)
#1 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#3 D:\dev\return-true\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\dev\return-true\application\views\template.php(43): Kohana_View->__toString()
#5 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#6 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#7 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\dev\return-true\application\classes\Controller\Base.php(59): Kohana_Controller_Template->after()
#9 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#15 {main} in D:\dev\return-true\application\views\profile_edit.php:38
2014-02-07 23:53:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\views\profile_edit.php [ 38 ] in D:\dev\return-true\application\views\profile_edit.php:38
2014-02-07 23:53:53 --- DEBUG: #0 D:\dev\return-true\application\views\profile_edit.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\dev\return-t...', 38, Array)
#1 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#2 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#3 D:\dev\return-true\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\dev\return-true\application\views\template.php(43): Kohana_View->__toString()
#5 D:\dev\return-true\system\classes\Kohana\View.php(61): include('D:\dev\return-t...')
#6 D:\dev\return-true\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\dev\return-t...', Array)
#7 D:\dev\return-true\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\dev\return-true\application\classes\Controller\Base.php(59): Kohana_Controller_Template->after()
#9 D:\dev\return-true\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\dev\return-true\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 D:\dev\return-true\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\dev\return-true\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\dev\return-true\index.php(118): Kohana_Request->execute()
#15 {main} in D:\dev\return-true\application\views\profile_edit.php:38