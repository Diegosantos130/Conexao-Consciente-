<?php
namespace App\Models;

class User
{
    public static function all(): array
    {
        return Database::connect()
            ->query('SELECT id_usuario, nome, email
                     FROM usuario
                     WHERE ativo = 1
                     ORDER BY nome')
            ->fetchAll();
    }

    public static function find(int $id): ?array
    {
        $stmt = Database::connect()->prepare(
            'SELECT id_usuario, nome, email
             FROM usuario
             WHERE id_usuario = ? AND ativo = 1'
        );
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public static function emailExists(string $email): bool
    {
        $stmt = Database::connect()->prepare(
            'SELECT 1 FROM usuario WHERE email = ?'
        );
        $stmt->execute([$email]);
        return (bool) $stmt->fetchColumn();
    }

    public static function create(string $nome, string $email, string $senha): int
    {
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $pdo  = Database::connect();
        $stmt = $pdo->prepare(
            "INSERT INTO usuario (nome, email, senha, tipo_user)
             VALUES (?, ?, ?, 'final')"
        );
        $stmt->execute([$nome, $email, $hash]);
        return (int) $pdo->lastInsertId();
    }
}