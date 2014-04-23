<?php defined('SYSPATH') OR die('No direct access allowed.');
/***
 * User: BrSpirit
 * Date: 07.02.14
 */
class Model_Category extends ORM
{
    protected $_table_name='categories';

    protected $_has_many = array(
        'articles' => array(
            'article',
            'foreign_key' => 'category_id'
        ),
        'topics' => array(
            'topic',
            'foreign_key' => 'category_id'
        ),
        'child' => array(
            'model'=>'category',
            'through' => 'category_to_category',
            'foreign_key' => 'parent_id',
            'far_key' => 'child_id'
        ),
    );

    protected $_belongs_to = array(
        'parent' => array(
            'model'=>'category',
            'foreign_key' => 'child_id',
            'far_key' => 'parent_id',
            'through' => 'category_to_category'
        )
    );

    public function is_child()
    {
        $check = DB::select(array(
            DB::expr('Count(*)'),
            'num'
        ))
                   ->from('category_to_category')
                   ->where('child_id', '=', $this->id)
                   ->execute()
                   ->get('num');
        if($check==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}