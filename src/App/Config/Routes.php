<?php
declare(strict_types=1);

namespace App\Config;
use Framework\App;
use App\Controllers\{
    HomeController,
    AboutController,
    ProductsController,
    DonateController,
    ContactsController,
    AuthController,
    ErrorController
};
use App\Middleware\{AuthRequiredMiddleware, GuestOnlyMiddleware};

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/products', [ProductsController::class, 'products']);
    $app->get('/donate', [DonateController::class, 'donate']);
    $app->get('/contacts', [ContactsController::class, 'contactsView']);
    $app->post('/contacts', [ContactsController::class, 'contacts']);
    $app->get('/register', [AuthController::class, 'registerView'])->add(GuestOnlyMiddleware::class);
    $app->post('/register', [AuthController::class, 'register'])->add(GuestOnlyMiddleware::class);
    $app->get('/login', [AuthController::class, 'loginView'])->add(GuestOnlyMiddleware::class);
    $app->post('/login', [AuthController::class, 'login'])->add(GuestOnlyMiddleware::class);
    $app->get('/logout', [AuthController::class, 'logout'])->add(AuthRequiredMiddleware::class);

    $app->setErrorHandler([ErrorController::class, 'notFound']);
}