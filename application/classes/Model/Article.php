<?php defined('SYSPATH') OR die('No direct access allowed.');

/***
 * User: BrSpirit
 * Date: 07.02.14
 */
class Model_Article extends ORM
{
    protected $_table_name='articles';

    protected $_belongs_to = array(
        'user' => array('user', 'foreign_key' => 'author_id'),
        'category' => array('category', 'foreign_key' => 'category_id')
    );

    protected $_has_many = array(
        'posts' => array('post', 'foreign_key' => 'topic_id')
    );

    public function BBcode()
    {
        $content = preg_replace('#\[url=\"(.*?)\"\](.*?)\[/url\]#si', '<a href="\\1">\\2</a>', $this->content);
        $content = preg_replace('#\[b\](.*?)\[/b\]#si', '<b>\\1</b>', $content);
        $content = preg_replace('#\[i\](.*?)\[/i\]#si', '<i>\\1</i>', $content);
        $content = preg_replace('#\[code\](.*?)\[/code\]#si', '<pre class="pre-scrollable">\\1</pre>', $content);

        return $content;
    }
}