<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise superglobals</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>


<div class="container">
    <div class="row d-flex flex-column offset-md-3 justify-content-center ">
    </div>
    <div class="col-md-8 flex-column row1">
        <h4>Your top 5 favorite movies & tv shows :</h4>
        <div><?php
            function show_Movies($e)
            {
                return  "$e[movie]";
            }
            $c = array_map("show_Movies", $_POST['item']);
            echo '<ul>';
            foreach($c as $item){
                echo '<li>'.$item.'</li>';
            }
            echo '</ul>'; ?>
        </div>
    </div>



  <div class="col-md-8 flex-column row1">
        <h4>Your top 3 favo countries:</h4>
        <div><?php
            function show_countries($e)
            {
                return  "$e[countrie]";
            }
            $i = array_map("show_countries", $_GET['item']);
            echo '<ul>';
            foreach($i as $item){
                echo $item;
            }
          ?>
        </div>
    </div>
    <div class="col-md-8 flex-column row1">
        <h4>Your worst movie ever seen:</h4>
        <div><?php
            function show_worstMovie($e)
            {
                return  "$e[worst]";
            }
            $x = array_map("show_worstMovie", $_GET['item']);
            foreach($x as $item) {
                echo $item;
            }
            ?>
        </div>
    </div>
</div>
       
</body>
</html>
