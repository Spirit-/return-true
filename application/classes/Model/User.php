<?php defined('SYSPATH') OR die('No direct access allowed.');

/***
 * User: BrSpirit
 * Date: 07.02.14
 */
class Model_User extends Model_Auth_User
{

	protected $_has_many = array(
        'roles' => array('role', 'through'=>'roles_users'),
        'posts' => array('post', 'foreign_key' => 'author_id'),
        'articles' => array('article', 'foreign_key' => 'author_id'),
        'topics' => array('topic', 'foreign_key' => 'author_id')
    );

    public function register($array)
    {
        $this->values($array);
        $this->save();
        $this->add('roles', ORM::factory('role', array('name' => 'login')));
//        $this->save();
//        return Auth::instance()->login($array['username'], $array['password']);
    }

    public function complete_login()
    {
        $this->last_login=date('Y-m-d H:i:s');
    }

} // End User Model