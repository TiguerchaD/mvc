<?php
function get_posts(){
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
    return $result;
}
