<?php

namespace App\Interfaces;

use App\Contact;


interface CarrierInterface
{
	
	public function dialContact(Contact $contact);

	public function writeMessage($message);

	public function makeCall(): Call;

	public function sendSms(): Sms;
}