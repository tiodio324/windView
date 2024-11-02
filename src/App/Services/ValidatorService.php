<?php
declare(strict_types=1);

namespace App\Services;

use Framework\Validator;
use Framework\Rules\{
    RequiredRule,
    NameRule,
    EmailRule,
    PasswordRule,
    MatchRule,
    MaxLengthRule,
};

class ValidatorService
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->add('required', new RequiredRule());
        $this->validator->add('name', new NameRule());
        $this->validator->add('email', new EmailRule());
        $this->validator->add('minLength', new PasswordRule());
        $this->validator->add('match', new MatchRule());
        $this->validator->add('maxLength', new MaxLengthRule());
    }

    public function validateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            'name' => ['required', 'minLength:4', 'maxLength:16', 'name'],
            'password'=> ['required', 'minLength:8', 'maxLength:32'],
            'confirmPassword' => ['required', 'match:password'],
            'tos' => ['required']
        ]);
    }

    public function validateLogin(array $formData)
    {
        $this->validator->validate($formData, [
            'name' => ['required', 'minLength:4', 'maxLength:16', 'name'],
            'password' => ['required', 'minLength:8', 'maxLength:32']
        ]);
    }

    public function validateContacts(array $formData)
    {
        $this->validator->validate($formData, [
            'name' => ['required', 'minLength:4', 'maxLength:32', 'name'],
            'surname' => ['required', 'minLength:4', 'maxLength:32', 'name'],
            'email' => ['required', 'email'],
            'message' => ['required', 'maxLength:255'],
        ]);
    }
}