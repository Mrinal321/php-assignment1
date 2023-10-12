<?php

if (isset($_POST)) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $pages = $_POST['pages'];
    $isbn = $_POST['isbn'];
    $available = true;

    $data = json_decode(file_get_contents('./books.json'), true);
    $newBook = [
        'title' => $title,
        'author' => $author,
        'pages' => $pages,
        'isbn' => $isbn,
        'available' => true,
    ];

    $data[] = $newBook;

    file_put_contents('./books.json', json_encode($data));

    header('Location: index.php');
}