<?php
use src\Controller\UserController;

// On récupère notre contrôleur
$controller = new UserController();
// On récupère les données de l'index
$datas = $controller->list();
// On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

require 'inc/header.php';



?>

    <?= "<p>J&#039;aime le vendredi &agrave; l&#039;ombre</p>" ?>
    <?= "<p>a&ampa &#039;&#039;&#039;&#039;Paul Edgecomb, pensionnaire centenaire d&amp; &#039;une maison de retraite, est hant&eacute; par ses souvenirs. Gardien-chef du p&eacute;nitencier de Cold Mountain en 1935, il &eacute;tait charg&eacute; de veiller au bon d&eacute;roulement des ex&eacute;cutions capitales en s&rsquo;effor&ccedil;ant d&amp;#039;adoucir les derniers moments des condamn&eacute;s. Parmi eux se trouvait un colosse du nom de John Coffey, accus&eacute; du viol et du meurtre de deux fillettes. Intrigu&eacute; par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens tr&egrave;s for</p>" ?>

    <main class="container">
        <h1 class="mt-2">Présentation des produits</h1>
        <section class="row">
            <?php foreach ($users as $user) : ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user->getUsername(); ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

<?php require 'inc/footer.php'; ?>