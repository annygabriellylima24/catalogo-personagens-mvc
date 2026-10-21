
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect(
    "127.0.0.1",
    "root",
    "",
    "bd_personagens_mvc",
    3307
);

mysqli_set_charset($conn, "utf8mb4");

?>
