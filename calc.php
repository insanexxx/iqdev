<?php
$q = $_POST['message'];
$answer = array(
    'answer' => 'Принят запрос'.$q
);
echo json_encode($answer);
?>