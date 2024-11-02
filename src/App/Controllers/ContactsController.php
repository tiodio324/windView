<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, ContactsService};

class ContactsController
{
    public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validatorService,
        private ContactsService $contactsService
    )
    {

    }

    public function contactsView()
    {
        echo $this->view->render('contacts.php', [
            'title' => 'Contacts',
        ]);
    }

    public function contacts()
    {
        $this->validatorService->validateContacts($_POST);

        if (empty($_SESSION['user'])) {
            $_SESSION['signInAlert'] = 'To send a suggestion you must sign in';
            redirectTo('/login');
            die();
        }

        $this->contactsService->send($_POST);

        redirectTo('/');
    }
}