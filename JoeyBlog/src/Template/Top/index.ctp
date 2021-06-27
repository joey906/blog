<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joey Blog</title>
</head>
<body>
    <?php foreach ($data as $key => $val):?>
    <?php if ($val['published'] == 1):?>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $val['id']?></td>
            <td><?= $val['title']?></td>
            <td><?= $val['description']?></td>
            
            
        </tr>
    </tbody>
    <?php endif;?>
    <?php endforeach;?>
</body>
</html>