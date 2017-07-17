<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.17
 * Time: 15:45
 */

namespace classes\UserFilter;
use classes\UserFilter\AbstractTextWritter;

class UsersEmailTextWritter extends AbstractTextWritter
{
    private $filename;

    /**
     * UsersEmailTextWritter constructor.
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->filename = $fileName;
    }

    /**
     * @param $content
     * @throws \Exception
     */
    public function write($content)
    {
        if (!file_exists($this->filename)) {
            throw new \Exception('not found file exception');
        }
        file_put_contents($this->filename , $content . "\n", FILE_APPEND);

    }
}