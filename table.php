<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Add Book</a>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Available</th>
                <th>Pages</th>
                <th>Isbn</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = json_decode(file_get_contents('./books.json'), true);
                foreach($data as $book):
            ?>
            <tr>
                <td><?= $book['title'] ?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['available'] ?></td>
                <td><?= $book['pages'] ?></td>
                <td><?= $book['isbn'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>