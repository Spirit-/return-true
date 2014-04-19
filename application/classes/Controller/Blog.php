<?php   defined('SYSPATH') or die('No direct script access.');
/**
 * User: BrSpirit
 * Date: 17-lut-2014
 */

class Controller_Blog extends Controller_Base
{
    public function action_index()
    {
        $articles= ORM::factory('Article')->order_by('date', 'DESC')->find_all();
        if(count($articles)==0)
        {
            $this->template->content= 'Brak artykułów :(';
        }
        else
        {
            $this->template->content= View::factory('blog/index')->bind('articles', $articles);
        }
    }

    public function action_add()
    {
        if($this->request->post())
        {
            $post=$this->request->post();
            $article= ORM::factory('Article');
            $article->title= $post['title'];
            $article->content= $post['content'];
            $article->author_id= $this->user->id;
            $article->tags= $post['tags'];
            $article->category_id->$post['category'];
            $article->save();
//            $cookie= array('content'=>'')
        }
    }

}