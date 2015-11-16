<?php

namespace Zogs\MailerBundle\Mailer;

use Symfony\Component\Templating\EngineInterface;

use Zogs\UserBundle\Entity\User;
use Zogs\MailerBundle\Entity\Settings;
use Zogs\CommentBundle\Entity\Comment;

class Mailer
{
    protected $mailer;
    protected $templating;
    protected $expediteur;

    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating, $sender)
    {
        $this->mailer = $mailer;
        $this->expediteur = $sender;
        $this->templating = $templating;
    }

    public function sendTestMessage($email)
    {
        return $this->sendMessage('symfony@local.dev', $email, 'test mailer', '<html><body><strong>Hello world</strong></body></html>');;
    }
    

    protected function sendMessage($from, $to, $subject, $body)
    {
        $mail = \Swift_Message::newInstance();

        $mail
            ->setFrom($from)
            ->setTo($to)
            ->setSubject($subject)
            ->setBody($body)
            ->setContentType('text/html');

        return $this->mailer->send($mail);
    }

    public function registerPlugin(\Swift_Events_EventListener $plugin)
    {
        $this->mailer->registerPlugin($plugin);
    }
}