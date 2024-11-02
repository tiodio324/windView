<?php
declare(strict_types=1);

namespace App\Services;

use Framework\Database;

class ContactsService
{
    public function __construct(private Database $db)
    {

    }

    public function send(array $formData)
    {
        $this->db->query(
            "INSERT INTO contacts(user_id, name, surname, email, message)
            VALUES (:user_id, :name, :surname, :email, :message)",
            [
                'user_id' => $_SESSION['user'],
                'name' => $formData['name'],
                'surname' => $formData['surname'],
                'email'=> $formData['email'],
                'message'=> $formData['message']
            ]
        );
    }
}