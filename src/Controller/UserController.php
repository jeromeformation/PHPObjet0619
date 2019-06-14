<?php


namespace src\Controller;

use src\Entity\User;
use src\Utilities\Database;

class UserController
{
    public function list()
    {
        // Connexion à la BDD
        $database = new Database();
        // Requête SQL
        $query = "SELECT * FROM app_user";
        // Exécution de la requête SQL et récupération des produits
        $users = $database->query($query, User::class);
        // On retourne les produits dans un tableau
        return compact('users');
    }
}