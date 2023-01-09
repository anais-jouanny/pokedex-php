<?php 

class PokemonController extends CoreController {

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
}