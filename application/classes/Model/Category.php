<?php defined('SYSPATH') OR die('No direct access allowed.');
/***
 * User: BrSpirit
 * Date: 07.02.14
 */
class Model_Category extends ORM
{
    protected $_table_name='categories';

    protected $_has_many = array(
        'articles' => array('article', 'foreign_key' => 'category_id'),
        'topics' => array('topic', 'foreign_key' => 'category_id')
    );


}