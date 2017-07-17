<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.17
 * Time: 14:25
 */
namespace classes\UserFilter;
use classes\UserFilter\UsersEmailTextWritter;


class UserFilter
{
    private $ignoreUsers = [];
    private $users = [];
    private  $textWritter;


    /**
     * UserFilter constructor.
     * @param $projectList
     */
    public function __construct($projectList)
    {
        $this->textWritter = new UsersEmailTextWritter('/home/ivan/project/site.local/wp-content/themes/atr_project/list.txt');
        $this->setIgnoreUsersList($projectList);
    }

    public function setIgnoreUsers($users) {
        $this->ignoreUsers = $users;
    }
    public function pushIgnoreList($userId) {
        $this->ignoreUsers[] = $userId;
    }
    public function getIgnoreUsers() {
        return $this->ignoreUsers;
    }
    public function setIgnoreUsersList($projectList) {
        $projectList = $projectList->posts;
        foreach ($projectList as $project) {
            $this->pushIgnoreList($project->post_author);
        }
    }

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
    public function filterUsers() {
        $users = $this->getUsers();

        for ($i = 0; $i <= count($users); $i++) {
            $userData = $users[$i]->data;
            if (in_array($userData->ID, $this->getIgnoreUsers())) {
                continue;
            }

            $this->textWritter->write($userData->user_email);
            echo $userData->user_email;
        }
    }

}