<?php

namespace App\Services;

use App\Contact;
use DB\DB;

class ContactService
{
	
	
	public static function findByName(): Contact
	{
		// queries to the db
		return Contact;
	}

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbers
		if(strlen($number) != 9) return false;
		if(!is_numeric($number)) return false;
		return true;

	}


}