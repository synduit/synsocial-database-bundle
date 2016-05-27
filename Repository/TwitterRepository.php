<?php

namespace Synduit\SynsocialDatabaseBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;
use Synduit\SynsocialDatabaseBundle\Document\Twitter;

/**
 * TwitterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TwitterRepository extends DocumentRepository
{
    public function createTwitter($values)
    {
        $dm = $this->getDocumentManager();
        $twitter = new Twitter();
        if (isset($values['domain'])) {
            $twitter->setDomain($values['domain']);
        }

        $dm->persist($twitter);

        return $twitter;
    }

    public function setTwitterToken($twitter, $access_token)
    {
        $twitter->setOauthToken($access_token['oauth_token']);
        $twitter->setOauthTokenSecret($access_token['oauth_token_secret']);
        $twitter->setTwitterHandle($access_token['twitter_handle']);
    }

    public function findTwitterByDomain($domain)
    {
        return $this->findOneBy(
            array(
                    'domain' => $domain->getId(),
                )
        );
    }

}