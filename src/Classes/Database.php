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
     * On crée un constructeur pour initialiser PDO automatiquement
     */
    public function __construct()
    {
        var_dump("Entrée dans le constructeur");
        $this->connect();
    }

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
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
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

    /**
     * Execute une requête SQL pour :
     * - La création (INSERT INTO)
     * - La modification (UPDATE)
     * - La suppression (DELETE, DROP)
     * @param string $sql
     * @return int
     */
    public function exec(string $sql): int
    {
        return $this->pdo->exec($sql);
    }
}

