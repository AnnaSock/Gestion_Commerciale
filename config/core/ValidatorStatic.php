<?php

// 





namespace Config\Core;

class ValidatorStatic
{

    private static array $errors = [];

    /**
     * Vérifie si un champ est vide
     */
    public static function isEmpty(string $field): bool
    {
        return empty(trim($field));
    }

    /**
     * Vérifie si l'email est valide
     */
    public static function isEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Ajoute une erreur à la liste
     */
    public static function addError(string $field, string $message): void
    {
        self::$errors[$field][] = $message;
    }

    /**
     * Vérifie si la validation est réussie (aucune erreur)
     */
    public static function isValid(): bool
    {
        return count(self::$errors) === 0;
    }

    /**
     * Récupère toutes les erreurs
     */
    public static function getErrors(): array
    {
        return self::$errors;
    }

    public static function resetErrors(): void
    {
        self::$errors = [];
    }

}