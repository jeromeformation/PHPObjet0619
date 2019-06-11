<?php

namespace src\Controller;

class FilmController
{
    public function show()
    {
        $url = $_SERVER['REQUEST_URI'];
        $id = substr($url, 6);

        return compact('id');
    }
}