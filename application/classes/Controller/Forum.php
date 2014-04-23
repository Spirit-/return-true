<?php   defined('SYSPATH') or die('No direct script access.');
/**
 * User: Spirit
 * Author: Paweł Bojemski
 * Date: 18-kwi-2014
 */

class Controller_Forum extends Controller_Base
{
    public function action_index()
    {
        $categories = ORM::factory('Category')->find_all();
    	$this->template->content= View::factory('forum/index')->bind('categories', $categories);
    }
    public function action_forum()
    {
        $forums = ORM::factory('Topic',$this->request->param('id'));

        $this->template->content= View::factory('forum/category')->bind('forums', $forums->child->find_all());
    }
} 
