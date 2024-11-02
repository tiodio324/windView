<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, UserService};

class AuthController
{
    public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validatorService,
        private UserService $userService
        )
    {

    }

    public function registerView()
    {
        echo $this->view->render('register.php', [
            'title' => 'Register'
        ]);
    }

    public function register()
    {
        $this->validatorService->validateRegister($_POST);

        $this->userService->isNameTaken($_POST['name']);
        $this->userService->create($_POST);

        redirectTo("/");
    }

    public function loginView()
    {
        echo $this->view->render('login.php', [
            'title' => 'Login'
        ]);

        if (isset($_SESSION['signInAlert'])) {
            echo "<script>alert('" . $_SESSION['signInAlert'] . "');</script>";
            unset($_SESSION['signInAlert']);
        }
    }

    public function login()
    {
        $this->validatorService->validateLogin($_POST);

        $this->userService->login($_POST);
    }

    public function logout()
    {
        $this->userService->logout();

        redirectTo('/login');
    }
}