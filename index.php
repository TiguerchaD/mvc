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
    <?php
    // data base connexion
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli('localhost', 'admin', '0000', 'p2pblog');
        $db->set_charset('utf8');

        // get the last 5 posts
        $sql = "SELECT id, titre, resume, DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%i') AS date_pub  FROM Article ORDER BY date_publication ASC LIMIT   5 ";
        $result = $db->query($sql);
    } catch (Exception $exception) {
        echo $exception->getMessage() . "  (" . $exception->getCode() . ") ";
        exit;
    }
    ?>

    <?php while ($post = $result->fetch_assoc()) { ?>
    <h3> <?= htmlspecialchars($post['titre']); ?>  
    <em> - <?= htmlspecialchars($post['date_pub']); ?></em>
    </h3>
    <p><?= htmlspecialchars($post['resume']); ?></p>

    <?PHP  } ?>
    <?php $result->free_result()?>



</body>

</html>

<?php $db->close();  ?>