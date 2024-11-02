<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class DonateController
{
    public function __construct(private TemplateEngine $view)
    {

    }

    public function donate()
    {
        echo $this->view->render('donate.php', [
            'title' => 'Donate',
        ]);
    }
}