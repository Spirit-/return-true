<?php defined('SYSPATH') or die('No direct script access.');
/**
 * User: BrSpirit
 * Date: 07-lut-2014
 */

class Controller_User extends Controller_Base
{
    public function action_edit()
    {
        if($this->request->post())
        {
//            var_dump($_POST);
            $user= ORM::factory('User', $this->user->id);
            $post=Validation::factory($_POST)
                ->rule('email', 'email')
                ->rule('nick', 'max_length', array(':value', '16'))
                ->rule('nick', 'min_length', array(':value', '3'))
                ->rule('nick', 'regex', array(':value', '([A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓ0-9\.\-\_\ ])'))
                ->rule('first_name', 'alpha')
                ->rule('last_name', 'regex', array(':value', '([A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓ\-])'))
                ->rule('signature', 'max_length', array(':value', '255'))
                ->rule('city', 'regex', array(':value', '([A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓ\-\_\ ])'));
            if($post->check())
            {
                $user->nick=$_POST['nick'];
                $user->email= $_POST['email'];
                $user->first_name=$_POST['first_name'];
                $user->last_name=$_POST['last_name'];
                $user->signature=$_POST['signature'];
                $user->city=$_POST['city'];
                if(isset($_POST['year'], $_POST['month'], $_POST['day']))
                    $user->birthdate=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
                $user->save();
                Cookie::set('success', 'Udało się zapisać zmiany');
                $this->redirect('user/edit');
            }
            else
            {
                Cookie::set('profile_edit', serialize($_POST));
                $errors= $post->errors('profile_edit');
            }
        }
        $this->template->content= View::factory('profile_edit')
            ->bind('errors', $errors);
    }
}