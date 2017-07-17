<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.17
 * Time: 13:37
 */

namespace UsersTools;


class UserFillter
{
    private $users;

    /**
     * @param $users
     */
    public function setUsers($users) {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getUsers() {
        return $this->users;
    }

    public function filter() {

    }

}