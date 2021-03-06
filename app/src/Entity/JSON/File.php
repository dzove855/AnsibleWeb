<?php
/**
 * Created by PhpStorm.
 * User: skrijeljhasib
 * Date: 08.05.17
 * Time: 11:23
 */

namespace Project\Entity\JSON;


/**
 * Class File
 * @package Project\Entity\JSON
 */
class File extends Task
{
    /**
     * @var
     */
    private $state;

    /**
     * @var
     */
    private $path;

    /**
     * @return string
     */
    public function getState():string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getPath():string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return array
     */
    public function toArray():array
    {
        $array["file"] = array_filter(get_object_vars($this));

        $array += parent::toArray();

        return $array;
    }
}