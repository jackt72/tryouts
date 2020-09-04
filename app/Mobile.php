<?php

namespace App;

use App\Interfaces\CarrierInterface;
use App\Services\ContactService;


class Mobile
{

	protected $provider;
	protected $provider2;

	// ToDo validation about 2 carrier but its necessary some trials
	function __construct(CarrierInterface $provider, CarrierInterface $provider2 = Null)
	{
		$this->provider = $provider;
		$this->provider2 = $provider2;
	}


	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);

		if(empty($contact)) return; 

		$this->provider->dialContact($contact);

		return $this->provider->makeCall();
	}

	/** function to make Sms */
	public function makeSmsByNumber($number = '',$message)
	{

		$contact = ContactService::validateNumber($number);

		$this->provider->writeMessage($message);

		return $this->provider->sendSms();
	}


}
