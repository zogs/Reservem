<?php

namespace Zogs\MailerBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;


class ZogsMailingSettingsToSettingsTransformer implements DataTransformerInterface
{

    private $user;

    /**
     * @param User
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Transforms an entity (MyUserBundle:Settings) to an entity (ZogsMailerBundle:Settings)
     *
     * @param  Issue|null $issue
     * @return string
     */
    public function transform($settings)
    {
        if (null === $settings) {
            return "";
        }

        return $settings->getZogsMailerSettings();
    }

    /**
     * Transforms an entity (ZogsMailerBundle:Settings) to an entity (MyUserBundle:Settings)
     *
     * @param  ZogsMailerBundle:Settings
     * @return MyUserBundle:Settings|null
     */
    public function reverseTransform($ZogsMailerSettings)
    {
        if(null === $ZogsMailerSettings){
            return null;
        }

        $this->user->getSettings()->setZogsMailerSettings($ZogsMailerSettings);

        return $this->user->getSettings();
       
    }
}