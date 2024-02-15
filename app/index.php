<?php
namespace App;

use App\Models\Category;
use App\Models\Post;

include "../vendor/autoload.php";
ini_set('display_errors', E_ALL);

$post1 = new Post('Post1', 'hello 1', 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?q=80&w=1470');
$post1->category(new Category('Sample Category1'));

$post2 = new Post('Post 2', 'Hello 2', 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?q=80&w=1470');
$post2->category(new Category('Sample Category2'));

$post3 = new Post('Post 3', 'Hello 3', 'https://images.unsplash.com/photo-1490730141103-6cac27aaab94?q=80&w=1470');
$post3->category(new Category('Sample Category3'));

$posts = array(
    $post1,
    $post2,
    $post3,
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT Backend Week 4</title>
</head>
<body>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li>
                <a href="post.php">
                    <?= $post->title ?> (<?= $post->category->title ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>