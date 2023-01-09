<section id="typeDetail">

    <?php foreach($viewData["pokemonsType"] as $key => $pokemon) :?>
        <div class="card">
            <img src="<?=$absoluteUrl?>/img/<?=$pokemon->getNumber()?>.png" alt="pokemon <?= $pokemon->getName() ?>">
            <h3><a href="<?=$absoluteUrl?>/pokemon/<?=$pokemon->getNumber()?>">#<?=$pokemon->getNumber() . " " . $pokemon->getName()?></a></h3>
        </div>
    <?php endforeach; ?>

</section>