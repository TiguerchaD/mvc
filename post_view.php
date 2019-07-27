<?php ob_start(); ?>
<h1>Mon site</h1>
<p><a href="index.php"> Retour a la liste des articles</a></p>
<h2> <?= htmlspecialchars($post['titre']); ?>
    <em> - <?= htmlspecialchars($post['date_pub']); ?></em>
</h2>
<p><?= htmlspecialchars($post['contenu']); ?></p>

<h2>Commentaires</h2>
<?php while ($comment = $comments->fetch_assoc()) { ?>
    <p> <?= nl2br(htmlspecialchars($comment['contenu'])); ?> </p>
<?PHP  } ?>
<?php $comments->free_result() ?>
<?php $content = ob_get_clean();?>