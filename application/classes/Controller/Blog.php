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

    public function action_addarticle()
    {
        $this->template->content = View::factory('blog/add_article');
        if($this->request->post())
        {
            $post=$this->request->post();
            $article= ORM::factory('Article');
            $article->title= $post['title'];
            $article->content= $post['content'];
            $article->author_id= $this->user->id;
            $article->tags= strtolower(str_replace(' ', ',', $post['title']));
//            $article->category_id= $post['category'];
            $article->save();
            $this->redirect('blog/article/' . $article->id);
//            $cookie= array('content'=>'')
        }
    }

    public function action_showarticle()
    {
        $article = ORM::factory('Article', $this->request->param('id'));
        if($this->request->post())
        {
            $post = ORM::factory('Post');
            $post->content = $_POST['content'];
            $post->author_id = $this->user->id;
            $post->topic_id = $article->id;
            $post->type = 'article';
            $post->save();
        }
        if($article->posts->find_all()->count()>=1)
        {
            $posts = $article->posts->find_all();
        }
        else
        {
            $posts = NULL;
        }

        $this->template->content = View::factory('blog/show_article')
                                       ->bind('article', $article)
                                       ->bind('posts', $posts)
                                       ->bind('admin', $this->admin)
                                       ->bind('moderator', $this->moderator)
                                       ->bind('user', $this->user);
        if($this->request->post())
        {
            $post = ORM::factory('Post');
            $post->content = $_POST['content'];
            $post->author_id = $this->user->id;
            $post->topic_id = $article->id;
            $post->type = 'article';
            $post->save();
        }
    }

}