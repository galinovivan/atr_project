<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.17
 * Time: 15:44
 */

namespace classes\UserFilter;


abstract class AbstractTextWritter
{
    /**
     * @param $content
     * @return mixed
     */
    abstract function write($content);

}