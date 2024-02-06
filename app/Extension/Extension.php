<?php

declare(strict_types=1);

namespace App\Extension;

use Nette\DI\CompilerExtension;


class CustomExtension extends CompilerExtension
{
	private $defaults = [];


	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();

		$config = $this->loadFromFile(__DIR__ . '/config.neon');
		$this->compiler->loadDefinitionsFromConfig($config['services']);
	}
}