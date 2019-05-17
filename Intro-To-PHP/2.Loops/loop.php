<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise loop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="container">
    <div class="row d-flex flex-column offset-md-4 justify-content-center ">
   
        <h1> < Loop > </h1>
    </div>
    <div class=" table-bordered table-hover justify-content-center">
        <?php
        //array for movies
        //link for google page a href=https://www.google.com/search?q=..  
        $multiarray = array (
            ["tv-show" => "<a href='https://www.google.com/search?q=Naruto'>Naruto</a>", "rating" => 3],
            ["tv-show" => "<a href='https://www.google.com/search?q=Firefly'>Firefly</a>","2"],
            ["tv-show" => "<a href='https://www.google.com/search?q=Big bang theory'>Big bang theory</a>", "rating" => 4],
            ["tv-show" => "<a href='https://www.google.com/search?q=Vikings'>Vikings</a>", "rating" => 4],
            ["tv-show" => "<a href='https://www.google.com/search?q=The last kingdom'>The last kingdom</a>", "rating" => 4],
            ["tv-show" => "<a href='https://www.google.com/search?q=Black mirror'>Black mirror</a>", "rating" => 3],
            ["tv-show" => "<a href='https://www.google.com/search?q=Gotham'>Gotham</a>", "rating" => 4],
            ["tv-show" => "<a href='https://www.google.com/search?q=American horror story'>American horror story</a>", "rating" => 5]
        );

        //for the movies
        //echo'<i class="fa fa-star" aria-hidden=""></i>'; is for stars icons
        foreach ($multiarray as $arrays){
            $count++;
            echo "<table>" ;

            echo "<span>Table $count</span>";
            echo "<thead>";

                    echo "<td>Name</td>";
                    echo "<td>Rating</td>";

            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            foreach ($arrays as $names ){
                echo "<td>$names</td>";
                  for ($x = 1; $x <= $names; $x++) {
                echo'<i class="fa fa-star" aria-hidden=""></i>';
            }
                if (strpos($names, '.')) {
                    echo '<i class="fa fa-star-half-o" aria-hidden=""></i>';
                    $x++;
                }
                while ($x <= 5) {
                    echo '<i class="fa fa-star-o" aria-hidden=""></i>';
                    $x++;
                }



                
            }
            echo "</tr>";
            echo "</tbody>";
            echo "</table><br>";
        }
        ?>
    </div>
</div>
</body>
</html>