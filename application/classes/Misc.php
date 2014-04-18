<?php   defined('SYSPATH') or die('No direct script access.');
/**
 * User: BrSpirit
 * Date: 18-lut-2014
 */

Class Misc extends Kohana_Controller
{
    public static function flashinfo($type, $message, $uri)
    {


           $view= View::factory('flash')
            ->bind('type', $type)
            ->bind('message', $message)
            ->bind('uri', $uri);
        Response::factory()->body($view);
    }
}