<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.17
 * Time: 13:30
 */

namespace UsersTools;


abstract class Repository
{
    private $entity;

    abstract function getEntity();
    abstract function setEntity($entity);
}