<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Provider\MailProvider;
use Nette;
use Nette\DI\Attributes\Inject;


final class HomePresenter extends Nette\Application\UI\Presenter
{
	#[Inject]
	public MailProvider $MailProvider;


	public function beforeRender(): void
	{
		$this->template->mail = $this->MailProvider;
	}

}
