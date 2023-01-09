<?php

class MainController {

    public function home() {
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();

        $this->show('home', ['pokemonList' => $pokemons]);
    }

    public function pokemonDetail($urlParam) {
        $pokId = $urlParam['pok_number'];

        $pokemonModel = new Pokemon();
        $pokemon = $pokemonModel->find($pokId);

        $typeModel = new Type();
        $types = $typeModel->findAllByPokemonNum($pokId);

        $this->show('pokemon', ['pokemon' => $pokemon, 'types' => $types]);
    }

    public function types() {
        $typeModel = new Type();
        $types = $typeModel->findAll();

        $this->show('types', ['types' => $types]);
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