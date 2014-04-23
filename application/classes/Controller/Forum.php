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
        $topics = ORM::factory('Topic')->where('category_id','=',$this->request->param('id'))->find_all();
        $this->template->content= View::factory('forum/topic_list')->bind('topics', $topics);
    }
    public function action_topic()
    {
        $topic_info = ORM::factory('Topic',$this->request->param('id'));
        $first_post = ORM::factory('Post')
                ->where('topic_id','=',$this->request->param('id'))
                ->where('first','=',1)
                ->find();
        $posts = ORM::factory('Post')->where('topic_id','=',$this->request->param('id'))->find_all();
        $thread_view = View::factory('forum/thread');
        $thread_view->topic_info = $topic_info;
        $thread_view->first_post = $first_post;
        $thread_view->posts = $posts;
        $this->template->content= $thread_view;

    }
} 
