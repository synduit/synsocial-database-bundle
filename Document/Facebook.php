<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 5-11-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynsocialDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynsocialDatabaseBundle\Repository\FacebookRepository")
 */
class Facebook
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $pageAccessToken;

    /**
     * @MongoDB\String
     */
    protected $pageId;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

    /**
     * @MongoDB\Date
     */
    protected $created;

    /**
     * @MongoDB\Date
     */
    protected $updated;

    /**
     * @MongoDB\String
     */
    protected $userAccessToken;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $fbId;


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
     * Set pageAccessToken
     *
     * @param string $pageAccessToken
     * @return self
     */
    public function setPageAccessToken($pageAccessToken)
    {
        $this->pageAccessToken = $pageAccessToken;
        return $this;
    }

    /**
     * Get pageAccessToken
     *
     * @return string $pageAccessToken
     */
    public function getPageAccessToken()
    {
        return $this->pageAccessToken;
    }

    /**
     * Set pageId
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
     * Set domain
     *
     * @param Synsocial\SocialMediaBundle\Document\Domain $domain
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
     * Set created
     *
     * @param date $created
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
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param date $updated
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
     * @return date $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set userAccessToken
     *
     * @param string $userAccessToken
     * @return self
     */
    public function setUserAccessToken($userAccessToken)
    {
        $this->userAccessToken = $userAccessToken;
        return $this;
    }

    /**
     * Get userAccessToken
     *
     * @return string $userAccessToken
     */
    public function getUserAccessToken()
    {
        return $this->userAccessToken;
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
     * Set fbId
     *
     * @param string $fbId
     * @return self
     */
    public function setFbId($fbId)
    {
        $this->fbId = $fbId;
        return $this;
    }

    /**
     * Get fbId
     *
     * @return string $fbId
     */
    public function getFbId()
    {
        return $this->fbId;
    }
}
