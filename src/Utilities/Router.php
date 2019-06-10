<?php
namespace src\Utilities;

class Router
{
    /**
     * @var array
     */
    private $routes;

    /**
     * Ajoute un route au routeur
     * @param string $url - URL à détecter
     * @param string $file - Template à appeler
     */
    public function addRoute(string $url, string $file): void
    {
        $this->routes[] = [
            'url' => $url,
            'template' => $file
        ];
    }

    /**
     * Vérifie l'URL et renvoie l'enventuel fichier à appeler
     * @return string|null - Retourne l'éventuel template à appeler
     */
    public function match(): ?string
    {
        // On récupère l'URL
        $url = $_SERVER['REQUEST_URI'];
        // TODO : à enlever ASAP
        //if(strlen($url) >= 10) {
        //    $url = substr($url,  10);
        //}


        // On boucle dans les routes enregistrées
        foreach($this->routes as $route) {
            // Si la route correspond à l'URL
            if($route['url'] === $url) {
                // On retourne le template à exécuter
                return $route['template'];
            }
        }
        // Si aucune route n'a été trouvée, on retourne "null"
        return null;
    }
}