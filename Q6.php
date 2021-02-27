<?php

$array = [
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php foreach($array as $item) { ?> 
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $item['name'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $item['job'] ?></h6>
                <p class="card-text"><?= $item['experience'] ?> years of experience</p>
            </div>
        </div>
    <?php } ?>
</body>
</html>


  
 