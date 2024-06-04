<?php

/*******w******** 
    
    Name: Samuel Musafiri
    Date: 2024-05-20
    Description: Build a dynamic image gallery using Unsplash.

****************/

// array named config, stores key-value variables
$config = [
    'gallery_name' => 'My Essentials',
    'unsplash_categories' => ['faith', 'reading', 'sports', 'hobbies', 'food', 'nature'],
    'local_images' => [
        ['filename' => 'cross.jpg', 'photographer' => 'Aaron Burden', 'url' => 'https://unsplash.com/@aaronburden'],
        ['filename' => 'bible.jpg', 'photographer' => '
        Rachel Strong', 'url' => 'https://unsplash.com/@rachelstrong10'],
        ['filename' => 'court.jpg', 'photographer' => 'Alen Kajtezovic', 'url' => 'https://unsplash.com/@alenkajtezovic'],
        ['filename' => 'guitar.jpg', 'photographer' => 'Jefferson Santos', 'url' => 'https://unsplash.com/@jefflssantos']
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>
<body>
    <!-- displays the gallery name-->
    <h1> <?= $config['gallery_name'];?></h1>
    <div class="imgRow">
        <!-- loops through each element in unsplash category array, each element named as category in each iteration--->
    <?php foreach ($config['unsplash_categories'] as $category):?>
        <div class="imgBox">
            <!-- displays the category name, and captilizes first letter using ucfirst function -->
        <h2><?php echo ucfirst($category); ?></h2>
        <!-- displays random image based on category name -->
        <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
        </div>
    <?php endforeach; ?>
    </div>

    <!-- displays the count of the images, using count function -->
    <h1><?php echo count($config['local_images']); ?> Large Images</h1>

    <!-- loops through every local image file path in each iteration and displays it along with its info -->
    <?php foreach ($config['local_images'] as $image): ?>
        <h2><?php echo ucfirst(pathinfo($image['filename'], PATHINFO_FILENAME)); ?></h2>
        <img class="myimages" src="images/<?php echo $image['filename']; ?>" alt="<?php echo pathinfo($image['filename'], PATHINFO_FILENAME); ?>">
        <p>
            <a href="<?php echo $image['url']; ?>" target="_blank"><?php echo $image['photographer']; ?></a>
        </p>
    <?php endforeach; ?>
    

</body>
</html>