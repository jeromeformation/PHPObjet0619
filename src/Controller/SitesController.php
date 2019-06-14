<?php

namespace src\Controller;

use src\Entity\Site;
use src\Utilities\Database;

class SitesController
{
    public function index()
    {
        $bdd = new Database();
        $sql = "SELECT * FROM site";
        $sites = $bdd->query($sql, Site::class);

        var_dump($sites);
    }
}