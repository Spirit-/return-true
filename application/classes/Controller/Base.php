<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template;
    public $user;
    public $session;
    public $config;
    public $action;
    public $controller;
    public $admin;
    public $moderator;
    public $title;


	public function before()
    {
        $this->session = Session::instance();
        $this->config = Kohana::$config->load('cfg');
        $this->action = strtolower(Request::current()->action());
        $this->controller = strtolower(Request::current()->controller());
        $this->template= 'template';
        $this->user=Auth::instance()->get_user();

//        die(var_Dump($this->request->uri()));
        if(!$this->user && !in_array(strtolower($this->request->controller()), array('auth', 'blog', 'forum')))
        {
//            if($this->action != 'index' && $this->controller != 'auth')
                $this->redirect('auth');
        }

        if($this->user && $this->request->uri()=='auth/index')
            $this->redirect('/');
        if(empty($this->title))
            $this->title='Return-True';
        if($this->user)
        {
            if($this->user->has('roles', ORM::factory('Role', array('name' => 'admin'))))
            {
                $this->admin = TRUE;
            }

            if($this->user->has('roles', ORM::factory('Role', array('name' => 'moderator'))))
            {
                $this->moderator = TRUE;
            }
        }

        parent::before();
    }

    public function after()
    {
        View::bind_global('action', $this->action);
        View::bind_global('controller', $this->action);
        View::bind_global('user', $this->user);
        View::bind_global('config', $this->config);
        View::bind_global('admin', $this->admin);
        View::bind_global('moderator', $this->moderator);
        View::bind_global('title', $this->title);
        parent::after();
    }
} // End Welcome
