<?php   defined('SYSPATH') or die('No direct script access.');
/**
 * User: BrSpirit
 * Date: 07.02.14
 */

class Controller_Auth extends Controller_Base
{
    public function action_index()
    {
        if($this->request->post())
        {
            $post= Validation::factory($_POST)
                ->rule('login', 'not_empty')
                ->rule('password', 'not_empty');
            if($post->check())
            {
                if($this->user=Auth::instance()->login($_POST['login'], $_POST['password']))
                {
                    Misc::flashinfo('success', 'Pomyślnie zalogowano', '');
                    $this->redirect('/');
                }
                else
                {
                    $errors = array('logn' => 'Błąd logowania. Spróbuj ponownie');
                    Misc::flashinfo('success', 'Błąd logowania. Spróbuj ponownie.', '/auth');
                }
            }
            else
            {
                $errors=$post->errors('login');
            }

        }
        $this->template->content=View::factory('auth/index')
            ->bind('errors', $errors);
    }

    public function action_logout()
    {
        Auth::instance()->logout();
//        Cookie::set('success', 'Pomyślnie wylogowano');
        $this->redirect('/');
    }

    public function action_register()
    {
        $user=ORM::factory('User');
        if($this->request->post())
        {
            $post= Validation::factory($_POST)
                ->rule('username', 'not_empty')
                ->rule('username', 'max_length', array(':value', '16'))
                ->rule('username', 'min_length', array(':value', '3'))
                ->rule('username', 'regex', array(':value', '([A-Za-z0-9])'))
                ->rule('password', 'regex', array(':value', '([a-zA-Z0-9\.\-\_])'))
                ->rule('password', 'min_length', array(':value', '6'))
                ->rule('password', 'max_length', array(':value', '12'))
                ->rule('password', 'not_empty')
                ->rule('email', 'email')
                ->rule('email', 'not_empty')
                ->rule('re_password', 'not_empty')
                ->rule('re_password', 'matches', array(':value', ':field', 'password'))
                ->rule('nick', 'not_empty')
                ->rule('nick', 'max_length', array(':value', '16'))
                ->rule('nick', 'min_length', array(':value', '3'))
                ->rule('nick', 'regex', array(':value', '([A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓ0-9\.\-\_\ ])'));
//            die(var_dump($post));
            if($post->check())
            {
                $user->register($_POST);
            }
            else
            {
                $errors= $post->errors('register');

            }

        }
        $this->template->content= View::factory('auth/register')
            ->bind('errors', $errors);
    }
}