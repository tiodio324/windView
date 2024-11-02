<?php
namespace Framework\Rules;

use Framework\Contracts\RuleInterface;
use InvalidArgumentException;

class NameRule implements RuleInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        return !preg_match('/[\'"\\\`$%^@&*()+=<>?|{}[\]~;:,]/', (string) $data[$field]);
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "Invalid characters";
    }
}