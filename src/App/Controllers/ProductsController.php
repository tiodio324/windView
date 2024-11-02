<?php
declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class ProductsController
{
    public function __construct(private TemplateEngine $view)
    {

    }

    public function products()
    {
        echo $this->view->render('products.php', [
            'title' => 'Our Products',
        ]);
    }
}