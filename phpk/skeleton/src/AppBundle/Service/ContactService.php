<?php


namespace AppBundle\Service;


use AppBundle\Entity\Agent;

class ContactService
{
    private $mailer;
    private $recipient = 'julien.fantni@assurance-maladie.fr';

    public function __construct(\Swift_Mailer $mailer, $recipient)
    {
        $this->mailer = $mailer;
        $this->recipient = $recipient;
    }

    public function sendMail(Agent $contact)
    {
        $message = (new Swift_Message($contact->subject))
            ->setFrom($contact->email)
            ->setTo($this->recipient)
            ->setBody($contact->message);

        $this->mailer->send($message);
    }

    public function getHappyMessage()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

}