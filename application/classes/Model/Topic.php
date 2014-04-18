<?php defined('SYSPATH') OR die('No direct access allowed.');

/***
 * User: BrSpirit
 * Date: 07.02.14
 */
class Model_Topic extends ORM
{
    protected $_table_name='topics';

    protected $_has_many = array(
        'posts' => array('post', 'foreign_key' => 'topic_id')
    );

    protected $_belongs_to = array(
        'user' => array('user', 'foreign_key' => 'author_id'),
        'category' => array('category', 'foreign_key' => 'category_id')
    );
}