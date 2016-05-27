<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 22-10-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynsocialDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynsocialDatabaseBundle\Repository\SettingRepository")
 */
class Setting
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $lastPostCronTime;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastPostCronTime
     *
     * @param string $lastPostCronTime
     * @return self
     */
    public function setLastPostCronTime($lastPostCronTime)
    {
        $this->lastPostCronTime = $lastPostCronTime;
        return $this;
    }

    /**
     * Get lastPostCronTime
     *
     * @return string $lastPostCronTime
     */
    public function getLastPostCronTime()
    {
        return $this->lastPostCronTime;
    }

}
