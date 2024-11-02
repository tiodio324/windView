<?php
declare(strict_types=1);

namespace App\Services;

use Framework\Database;
use Framework\Exceptions\ValidationException;

class UserService
{
    public function __construct(private Database $db)
    {

    }

    public function isNameTaken(string $name)
    {
        $nameCount = $this->db->query(
            "SELECT COUNT(*) FROM users WHERE name = :name", [
                'name' => $name
            ]
        )->count();

        if ($nameCount > 0) {
            throw new ValidationException(['name' => 'This name already exists']);
        }
    }

    public function create(array $formData)
    {
        $password = password_hash($formData['password'], PASSWORD_BCRYPT, ['cost' => 12]);

        $this->db->query(
            "INSERT INTO users (name,password)
            VALUES (:name, :password)",
            [
                'name' => $formData['name'],
                'password' => $password,
            ]
        );

        session_regenerate_id();

        $_SESSION['user'] = $this->db->id();
    }

    public function login(array $formData)
    {
        $user = $this->db->query(
            "SELECT * FROM users WHERE name = :name",
            [
                'name' => $formData['name']
            ]
        )->find();

        $passwordsMatch = password_verify(
            $formData['password'],
            $user['password'] ?? ''
        );

        if (!$user || !$passwordsMatch) {
            throw new ValidationException(['password' => ['Invalid credentials']]);
        }

        session_regenerate_id();

        $_SESSION['user'] = $user['id'];

        redirectTo("/");
    }

    public function logout()
    {
        session_destroy();
        $params = session_get_cookie_params();
        setcookie(
            'PHPSESSID',
            '',
            time() - 3600,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }
}