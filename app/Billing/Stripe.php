<?php
/**
 * Created by PhpStorm.
 * User: matteocirami
 * Date: 3/8/18
 * Time: 4:54 PM
 */

namespace App\Billing;


class Stripe
{
	protected $key;

	public function __construct($key)
	{
		$this->key = $key;
	}

}