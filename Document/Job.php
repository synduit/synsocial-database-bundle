<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 18-11-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynsocialDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynsocialDatabaseBundle\Repository\JobRepository")
 */
class Job
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

    /**
     * @MongoDB\String
     */
    protected $sourceId;

    /**
     * @MongoDB\String
     */
    protected $status;

    /**
     * @MongoDB\String
     */
    protected $jobType;

    /**
     * @MongoDB\String
     */
    protected $reports;

    /**
     * @MongoDB\Date
     */
    protected $started;

    /**
     * @MongoDB\Date
     */
    protected $finished;

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
     * Set sourceId
     *
     * @param string $sourceId
     * @return self
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    /**
     * Get sourceId
     *
     * @return string $sourceId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Set jobType
     *
     * @param string $jobType
     * @return self
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;
        return $this;
    }

    /**
     * Get jobType
     *
     * @return string $jobType
     */
    public function getJobType()
    {
        return $this->jobType;
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
     * Set reports
     *
     * @param string $reports
     * @return self
     */
    public function setReports($reports)
    {
        $this->reports = $reports;
        return $this;
    }

    /**
     * Get reports
     *
     * @return string $reports
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * Set started
     *
     * @param date $started
     * @return $this
     */
    public function setStarted($started)
    {
        $this->started = $started;
        return $this;
    }

    /**
     * Get started
     *
     * @return date $started
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * Set finished
     *
     * @param date $finished
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;
        return $this;
    }

    /**
     * Get finished
     *
     * @return date $finished
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set created
     *
     * @param date $created
     * @return $this
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
     * @return $this
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
}
