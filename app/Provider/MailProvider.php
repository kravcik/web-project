<?php

declare(strict_types=1);

namespace App\Provider;

class MailProvider
{
	public array $data = [];


	public function __toString(): string
	{
		return !empty($this->data['supportMail']) ? $this->data['supportMail'] : \Tracy\Debugger::$email;
	}
}