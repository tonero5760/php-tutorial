<?php require_once 'script.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>My stds array</h1>

            <p>My fourth student is <?=$myStds[4]?> and the length of student is <?=count($myStds)?> and my students are
            </p>
            <ul>
                <?php
    for($i=0; $i < count($myStds); $i++){
        echo "<li>$myStds[$i] is my $i(st) student his intlligent</li>";
    }
?>
            </ul>

            <ul>
                <?php foreach($myStds as $key=>$value): ?>
                <li><?=$value?> is my <?=$key?> student and he is intelligent</li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="row">

          <!-- dnd($products) -->
          <h3>Products lists</h3>

          <ul class="list-group">
          <?php
            for($i=0; $i < count($products); $i++){
                echo "<li class='list-group-item'>";
                for($y = 0; $y < count($products[$i]); $y++){
                    echo $products[$i][$y] . " ";
                }
                echo "</li>";
            }
          ?>

        </ul>

        <ul class="list-group">
            <?php foreach($products as $prod): ?>
                <li class="list-group-item">
                    <?php foreach($prod as $key =>$value): ?>
                        <?php if($key == 4): ?>
                            <img src="<?=$value?>" alt="" class="img-fluid w-25">
                        <?php else: ?>
                        <?=$value?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </li>
            <?php endforeach; ?>
            
           
        </ul>

        </div>

        <div class="row">

        <?php foreach($products as $prod): ?>

           
                <div class="col-md-3">
                    <div class="card">
                    <img class="card-img-top" src="<?=$prod[4]?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?=$prod[0]?></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus et, dolor impedit.</p>
                    </div>

                   

                    <span class="p-3 bg-danger" style="color:#fff">#<?=number_format($prod[3],2)?></span>
            
                </div>
        </div>
           
        <?php endforeach; ?>
           
        </div>
    </div>



</body>

</html>