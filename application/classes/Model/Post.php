<?php defined('SYSPATH') OR die('No direct access allowed.');
/***
 * User: BrSpirit
 * Date: 07.02.14
 */
class Model_Post extends ORM
{
    protected $_table_name='posts';

    protected $_belongs_to = array(
        'article' => array('article', 'foreign_key' => 'author_id'),
        'user' => array('user', 'foreign_key' => 'author_id'),
        'topic' => array('topic', 'foreign_key' => 'author_id')
    );
}