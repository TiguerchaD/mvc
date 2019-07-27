
    <?php ob_start();?>
    <h1> Mon blog</h1>
    <h2>Derniers articles </h2>

    <?php while ($post = $posts->fetch_assoc()) { ?>
    <h3> <?= htmlspecialchars($post['titre']); ?>  
    <em> - <?= htmlspecialchars($post['date_pub']); ?></em>
    </h3>
    <p><?= htmlspecialchars($post['resume']); ?></p>

    <p><a href="post_controller.php?id=<?= htmlspecialchars($post['id']); ?>">Lire l'article</a></p>

    <?PHP  } ?>

    <?php $posts->free_result()?>
    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>


