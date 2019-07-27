<?php 
require_once('model.php');
if(isset($_GET['id']) && $_GET['id'] > 0 ){
    $post = get_post($_GET['id']);
    $comments = get_post_comments($post['id']);
    require ('post_view.php');

}else {
    echo "Erreur: aucun id";
    exit;
}