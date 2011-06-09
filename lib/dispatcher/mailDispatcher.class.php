<?php
class mailDispatcher extends sfEvent
{
	static function sendMail(sfEvent $event)
	{
	  $mailer = sfContext::getInstance()->getMailer();
      $subject = $event->getSubject();
      $param = $event->getParameters();
		
		
		$message = new Swift_Message();
		$message->setSubject($param['sujet'])
		->setBody($param['body'],'text/html')
		->setFrom(array('admin@quote.fr' => 'Blague a donf'))
		->setTo($subject);
		
		
		$mailer->send($message);
	}
}