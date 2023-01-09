<section id="home">

    <?php foreach($viewData["pokemonList"] as $key => $pokemon) :?>
        <div class="prez-poke">
            <img src="<?=$absoluteUrl?>/img/<?=$pokemon->getNumber()?>.png" alt="pokemon <?= $pokemon->getName() ?>">
            <h3><a href="<?=$absoluteUrl?>/pokemon/<?=$pokemon->getNumber()?>">#<?=$pokemon->getNumber() . " " . $pokemon->getName()?></a></h3>
        </div>
    <?php endforeach; ?>

</section>