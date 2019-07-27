<?php
    require_once('model.php');

    $result = get_posts();

    require('home_view.php');
    