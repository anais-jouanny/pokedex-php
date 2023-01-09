<h2>Détails de <?= $viewData['pokemon']->getName() ?></h2>

<div class="poke-wrap">
    <img src="<?=$absoluteUrl?>/img/<?=$viewData['pokemon']->getNumber()?>.png" alt="pokemon <?= $viewData['pokemon']->getName() ?>">
   
    <section id="card-poke">
        <h3>#<?=$viewData['pokemon']->getNumber() . " " . $viewData['pokemon']->getName()?></h3>
        <?php foreach($viewData['types'] as $type) :?>
            <a href="<?=$absoluteUrl?>/types/<?= $type->getId() ?>" style="background: #<?= $type->getColor() ?>;"><?= $type->getName() ?></a>
        <?php endforeach; ?>

        <h4>Statistiques</h4>

        <table>
            <tr>
                <td>PV</td>
                <td><?=$viewData['pokemon']->getHp()?></td>
                <td class="gauge">
                    <div class ="wrapper">
                        <div class ="progressbar" style="width:<?=(($viewData['pokemon']->getHp())/255)*100?>%;"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Attaque</td>
                <td><?=$viewData['pokemon']->getAttack()?></td>
                <td class="gauge">
                    <div class ="wrapper">
                        <div class ="progressbar" style="width:<?=(($viewData['pokemon']->getAttack())/255)*100?>%;"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Défense</td>
                <td><?=$viewData['pokemon']->getDefense()?></td>
                <td class="gauge">
                    <div class ="wrapper">
                        <div class ="progressbar" style="width:<?=(($viewData['pokemon']->getDefense())/255)*100?>%;"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Attaque Spé.</td>
                <td><?=$viewData['pokemon']->getSpe_attack()?></td>
                <td class="gauge">
                    <div class ="wrapper">
                        <div class ="progressbar" style="width:<?=(($viewData['pokemon']->getSpe_attack())/255)*100?>%;"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Défense Spé.</td>
                <td><?=$viewData['pokemon']->getSpe_defense()?></td>
                <td class="gauge">
                    <div class ="wrapper">
                        <div class ="progressbar" style="width:<?=(($viewData['pokemon']->getSpe_defense())/255)*100?>%;"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Vitesse</td>
                <td><?=$viewData['pokemon']->getSpeed()?></td>
                <td class="gauge">
                    <div class ="wrapper">
                        <div class ="progressbar" style="width:<?=(($viewData['pokemon']->getSpeed())/255)*100?>%;"></div>
                    </div>
                </td>
            </tr>
        </table>
    </section>
</div>

<p><a href="<?= $absoluteUrl ?>/" class="home-link">Revenir à l'accueil</a></p>
