<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> Mon blog</h1>
    <h2>Derniers articles </h2>

    <?php while ($post = $result->fetch_assoc()) { ?>
    <h3> <?= htmlspecialchars($post['titre']); ?>  
    <em> - <?= htmlspecialchars($post['date_pub']); ?></em>
    </h3>
    <p><?= htmlspecialchars($post['resume']); ?></p>

    <?PHP  } ?>
    <?php $result->free_result()?>



</body>

</html>

