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
 * @MongoDB\Document(repositoryClass="Synduit\SynsocialDatabaseBundle\Repository\TwitterRepository")
 */
class Twitter
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $oauthToken;

    /**
     * @MongoDB\String
     */
    protected $oauthTokenSecret;

    /**
     * @MongoDB\String
     */
    protected $twitterHandle;

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
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set oauthToken
     *
     * @param string $oauthToken
     * @return self
     */
    public function setOauthToken($oauthToken)
    {
        $this->oauthToken = $oauthToken;
        return $this;
    }

    /**
     * Get oauthToken
     *
     * @return string $oauthToken
     */
    public function getOauthToken()
    {
        return $this->oauthToken;
    }

    /**
     * Set oauthTokenSecret
     *
     * @param string $oauthTokenSecret
     * @return self
     */
    public function setOauthTokenSecret($oauthTokenSecret)
    {
        $this->oauthTokenSecret = $oauthTokenSecret;
        return $this;
    }

    /**
     * Get oauthTokenSecret
     *
     * @return string $oauthTokenSecret
     */
    public function getOauthTokenSecret()
    {
        return $this->oauthTokenSecret;
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
     * Set twitterHandle
     *
     * @param string $twitterHandle
     * @return self
     */
    public function setTwitterHandle($twitterHandle)
    {
        $this->twitterHandle = $twitterHandle;
        return $this;
    }

    /**
     * Get twitterHandle
     *
     * @return string $twitterHandle
     */
    public function getTwitterHandle()
    {
        return $this->twitterHandle;
    }
}
