<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
<?php foreach ($tes as $q) : ?>
                <li class="list-group-item">
                    <?= $q['text']; ?>
                 
                </li>
                <li class="list-group-item">
                    <?= $q['phone']; ?>
                 
                </li>
                <li class="list-group-item">
                    <?= $q['clientId']; ?>
                 
                </li>
                <?php endforeach; ?>
</ul>
</body>
</html>