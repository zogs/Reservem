<?php

namespace Crc\ReservBundle\Mailer;

use Symfony\Component\Templating\EngineInterface;
use Zogs\MailerBundle\Mailer\Mailer as ZogsMailer;
use Crc\ReservBundle\Entity\Reservation;

class Mailer extends ZogsMailer
{
    protected $mailer;
    protected $templating;
    protected $calendar_url_generator;

    public function __construct(\Swift_Mailer $mailer, EngineInterface $templating, $sender)
    {
        $this->mailer = $mailer;
        $this->expediteur = $sender;
        $this->templating = $templating;
    }

    public function sendConfirmed(Reservation $reservation)
    {
        $subject = "Confirmation, vous avez bien réservé des équipements.";

        $body = $this->templating->render('CrcReservBundle:Email:create.html.twig',array(
                'reservation'=>$reservation
                ));

        if($this->sendMessage($this->expediteur,$reservation->getUser()->getEmail(),$subject,$body))
            return true;

        return false;
    }


}