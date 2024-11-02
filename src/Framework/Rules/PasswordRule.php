<?php
declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;
use InvalidArgumentException;

class PasswordRule implements RuleInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        if (empty($params[0])) {
            throw new InvalidArgumentException("Minimum length not specified");
        }

        $minLength = (int) $params[0];
        return strlen($data[$field]) >= $minLength;
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "Must be at least {$params[0]} characters";
    }
}