<section id="types">
    <?php foreach($viewData['types'] as $type) :?>
        <a href="<?=$absoluteUrl?>/types/<?= $type->getId() ?>" style="background: #<?= $type->getColor() ?>;"><?= $type->getName() ?></a>
    <?php endforeach; ?>
</section>