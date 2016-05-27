<?php
/**
 * Created by PhpStorm.
 * User: Tkuldeep
 * Date: 09-07-2015
 * Time: 8:15 PM
 */

namespace Synduit\SynsocialDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynsocialDatabaseBundle\Repository\PostRepository")
 */
class Post
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Bin
     */
    protected $fbMessage;

    /**
     * @MongoDB\Bin
     */
    protected $twitterMessage;

    /**
     * @MongoDB\String
     */
    protected $link;

    /**
     * @MongoDB\String
     */
    protected $media;

    /**
     * @MongoDB\Integer
     */
    protected $scheduleDate;

    /**
     * @MongoDB\Integer
     */
    protected $created;

    /**
     * @MongoDB\Integer
     */
    protected $updated;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

    /**
     * @MongoDB\Boolean
     */
    protected $active;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $status;

    /**
     * @MongoDB\Date
     */
    protected $posted;

    /**
     * @MongoDB\String
     */
    protected $pageId;

    /**
     * @MongoDB\String
     */
    protected $groupId;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->active = true;
        $this->scheduleDate = 0;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Get link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set media
     *
     * @param string $media
     * @return self
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * Get media
     *
     * @return string $media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set scheduleDate
     *
     * @param integer $scheduleDate
     * @return self
     */
    public function setScheduleDate($scheduleDate)
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * Get scheduleDate
     *
     * @return integer $scheduleDate
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return integer $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * Get updated
     *
     * @return integer $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set domain
     *
     * @param \Synduit\SynsocialDatabaseBundle\Document\Domain $domain
     * @return self
     */
    public function setDomain(\Synduit\SynsocialDatabaseBundle\Document\Domain $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Get domain
     *
     * @return Synsocial\SocialMediaBundle\Document\Domain $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean $active
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fbMessage
     *
     * @param bin $fbMessage
     * @return self
     */
    public function setFbMessage($fbMessage)
    {
        $this->fbMessage = $fbMessage;
        return $this;
    }

    /**
     * Get fbMessage
     *
     * @return bin $fbMessage
     */
    public function getFbMessage()
    {
        return $this->fbMessage;
    }

    /**
     * Set twitterMessage
     *
     * @param bin $twitterMessage
     * @return self
     */
    public function setTwitterMessage($twitterMessage)
    {
        $this->twitterMessage = $twitterMessage;
        return $this;
    }

    /**
     * Get twitterMessage
     *
     * @return bin $twitterMessage
     */
    public function getTwitterMessage()
    {
        return $this->twitterMessage;
    }

    /**
     * Set posted
     *
     * @param date $posted
     * @return self
     */
    public function setPosted($posted)
    {
        $this->posted = $posted;
        return $this;
    }

    /**
     * Get posted
     *
     * @return date $posted
     */
    public function getPosted()
    {
        return $this->posted;
    }

    /** Set pageId
     *
     * @param string $pageId
     * @return self
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
        return $this;
    }
    
    /**
     * Get pageId
     *
     * @return string $pageId
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set groupId
     *
     * @param string $groupId
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Get groupId
     *
     * @return string $groupId
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

}
