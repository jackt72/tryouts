<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;
use App\Interfaces\CarrierInterface;

class MobileTest extends TestCase
{
	
	/** @test */
	public function it_returns_null_when_name_empty()
	{
		$provider = $this->createMock(CarrierInterface::class);
		$mobile = new Mobile($provider); //ToDo carrier interface 
		$this->assertNull($mobile->makeCallByName(''));
	}

	/** @test2 */
	public function it_returns_null_when_name_is_valid()
	{
		$provider = $this->createMock(CarrierInterface::class);
		$mobile = new Mobile($provider); //ToDo carrier interface 
		$this->assertTrue($mobile->makeCallByName('jack'));
	}

		/** @test3 */
	public function it_returns_null_when_contact_is_valid()
	{
		$provider = $this->createMock(CarrierInterface::class);
		$mobile = new Mobile($provider); //ToDo carrier interface 
		$this->assertTrue($mobile->makeCallByName('955751943','ola'));
	}

			/** @test4 */
	public function it_returns_true_when_send_sms_is_valid()
	{
		$provider = $this->createMock(CarrierInterface::class);
		$mobile = new Mobile($provider); //ToDo carrier interface 
		$this->assertTrue($mobile->makeSmsByNumber('955751943','ola'));
	}

}
