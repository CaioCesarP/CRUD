<?php

if (isset($_POST['id'])) {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif ($_GET['id']) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $id = '';
}

if (isset($_POST['nome'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif ($_GET['nome']) {
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $nome = '';
}

if (isset($_POST['email'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif ($_GET['email']) {
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $email = '';
}

if (isset($_POST['tel'])) {
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif ($_GET['tel']) {
    $tel = filter_input(INPUT_GET, 'tel', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $tel = '';
}

?>