<?php

require_once ROOT . "/public/comments/_data.php";

header ("Content-Type: application/json");
echo json_encode (getCommentList($_GET), JSON_PRETTY_PRINT);

?>
