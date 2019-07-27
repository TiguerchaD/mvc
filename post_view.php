<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>post</title>
</head>

<body>
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
    <?php $comments->free_result()?>




</body>

</html>