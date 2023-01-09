<?php

class MainController {

    public function home() {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();

        $this->show('home', ['pokemonList' => $pokemons]);
    }

    public function error404() {
        $this->show('error404');
    }

    public function show($page, $viewData = []) {
        $absoluteUrl = $_SERVER['BASE_URI'];

        include __DIR__ . "/../views/partials/header.tpl.php";
        include __DIR__ . "/../views/$page.tpl.php";
        include __DIR__ . "/../views/partials/footer.tpl.php";
    }
}