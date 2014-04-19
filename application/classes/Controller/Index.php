<?php   defined('SYSPATH') or die('No direct script access.');
/**
 * User: BrSpirit
 * Date: 07-lut-2014
 */

class Controller_Index extends Controller_Base
{
    public function action_index()
    {
        $bot=var_dump($this->user->username);
        $this->template->content= $bot;
    }
}