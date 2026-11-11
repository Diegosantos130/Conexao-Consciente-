<?php
namespace App\Validators;

class UserValidator
{
    /** @return array<string,string> campo => mensagem de erro */
    public function validate(array $input): array
    {
        $errors = [];

        $nome = $input['nome'] ?? '';
        if (!is_string($nome) || trim($nome) === '') {
            $errors['nome'] = 'Informe o nome.';
        } elseif (mb_strlen($nome) > 100) {
            $errors['nome'] = 'O nome deve ter no máximo 100 caracteres.';
        }

        $email = $input['email'] ?? '';
        if (
            !is_string($email) || mb_strlen($email) > 150
            || !filter_var($email, FILTER_VALIDATE_EMAIL)
        ) {
            $errors['email'] = 'Informe um e-mail válido.';
        }

        $senha = $input['senha'] ?? '';
        if (!is_string($senha) || strlen($senha) < 8) {
            $errors['senha'] = 'A senha deve ter no mínimo 8 caracteres.';
        } elseif (strlen($senha) > 72) {
            $errors['senha'] = 'A senha deve ter no máximo 72 caracteres.';
        }

        return $errors;
    }
}