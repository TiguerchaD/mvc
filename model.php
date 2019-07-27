<?php
 $db = db_connect();
function db_connect(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli('localhost', 'admin', '0000', 'p2pblog');
        $db->set_charset('utf8');
    } catch (Exception $exception) {
        echo $exception->getMessage() . "  (" . $exception->getCode() . ") ";
        exit;
    }
    return $db;
}


function get_posts(){
        global $db; 
        $sql = "SELECT id, titre, resume, DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%i') AS date_pub  FROM Article ORDER BY date_publication ASC LIMIT   5 ";
        $result = $db->query($sql);
   
    return $result;
}


function get_post($id){
    global $db; 
    $sql = "SELECT  id, titre, resume, contenu, DATE_FORMAT(date_publication, '%d/%m/%y à %Hh%i') AS date_pub   FROM Article ";
    $sql .= "WHERE id = '".$id."' ";
    $result = $db->query($sql);

    $post = $result->fetch_assoc();
    $result->free_result();

    return $post;
}

function get_post_comments($post_id){
    global $db;
    $sql = "SELECT * FROM Commentaire ";
    $sql .= "WHERE article_id = '".$post_id."' ";
    $sql .= "ORDER BY date_commentaire DESC ";
    $result = $db->query($sql);
    return $result;
}