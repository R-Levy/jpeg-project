<?php
$counter = $_GET['counter'];
if ($_GET['choice'] == 'pdf'){
    header("Location: pdf_report.php? counter=$counter");
}
else {
    echo error;
}
?>