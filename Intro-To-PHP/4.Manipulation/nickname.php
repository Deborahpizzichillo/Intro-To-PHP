<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String manipulation</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
<style> 
body{
  background-color:lightgray;
}
h3{
  text align:center;
}
</style>
</head>
<body>
<div class="container">
    <div class="row d-flex flex-column offset-md-4 justify-content-center ">
        <h1> < String manipulation > </h1>
    </div>
    <div class="row d-flex flex-row justify-content-center">
        <div class="col-md-5 flex-column justify-content-center row1">
            <form name="Cool NickName Generator" method="post" action="";>
            
                <h3>Cool nickname Generator</h3>
                <input maxlength="30" name="item[0][nickName]" size="30" type="text" /><br>
                <input type="submit" value="Submit" />
            </form>
            <div><?php
                function show_nickname($e)
                {
                    return  "$e[nickName]";
                }
                $i = array_map("show_nickname", $_POST['item']);
                $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
                echo '<ul>';
                foreach($i as $item){
                    echo '<li>'.$item.'</li>';
                    echo '<li>'.strrev($item).'</li>';
                   
                    echo '<li>'.ucwords($item).'</li>';
                    echo '<li>'.strrev($item).'</li>';
                    echo '<li>'.str_pad($item, 10, "--", STR_PAD_BOTH).'</li>';
                    // //echo '<li>'.strolower($item).'</li>';
                    echo '<li>'.str_pad($item, 6, "x", STR_PAD_LEFT).'</li>';
                    echo '<li>'.str_pad($item, 9, "$characters", STR_PAD_LEFT).'</li>';
                    echo '<li>'.str_pad($item, 10, "[$characters]", STR_PAD_LEFT).'</li>';
                }
                echo '</ul>'; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>