<?php

/**
 * Cette classe utilise PDO afin d'effectuer des opérations sur la BDD
 */
class Database
{
    /**
     * Instance de PDO
     * @var PDO
     */
    private $pdo;

    /**
     * Créer une instance de PDO
     */
    public function connect(): void
    {
        // Connexion à MySQL
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=catalogue',
            'root',
            null,
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
            ]
        );
    }

    /**
     * Exécute la requête SQL fournie et retourne un éventuel tableau
     * @param string $sql
     * @param string $className
     * @return array|null
     */
    public function query(string $sql, string $className): ?array
    {
        // Execution de la requête
        $result = $this->pdo->query($sql);
        // Récupération des résultats
        return $result->fetchAll(PDO::FETCH_CLASS, $className);
    }
}