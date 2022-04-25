<!-- part2 -->
<?php
$data = 
[
    [
        "path"=>"hhtps://picsum.photo/seed/1/1920/1080"
        "title"=>"Bridge"
    ],
    [
        "path"=>"hhtps://picsum.photo/seed/2/1920/1080"
        "title"=>"PC"
    ],
    [
        "path"=>"hhtps://picsum.photo/seed/1/1920/1080"
        "title"=>"WaterPoof"
    ],
    [
        "path"=>"hhtps://picsum.photo/seed/2/1920/1080"
        "title"=>"Strawberry"
    ],
// part1
    // "hhtps://picsum.photo/seed/1/1920/1080"
    // "hhtps://picsum.photo/seed/2/1920/1080"
    // "hhtps://picsum.photo/seed/3/1920/1080"
    // "hhtps://picsum.photo/seed/4/1920/1080"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img 
        {
            max-width:500px;
        }
    </style>
</head>
<body>
<!--1 part-->
<?php
        foreach($data as $str)
        {
            echo "<img src='$str'/>";
        }
?>
<?php foreach($data as $str):?>
    <img src="<?=$str?>"/>
    <?php endforeach; ?>

<!--2 part-->

    <?php
        foreach($data as $str)
        {
            echo "<img src='{$str["path"]}'/>";
            echo "<p>{$str["title"]}</p>";
        }
?>
<?php foreach($data as $str):?>
    <img src="<?=$str["path"]?>"/>
    <p><?=$str["title"]?></p>
    <?php endforeach; ?>
</body>
</html>