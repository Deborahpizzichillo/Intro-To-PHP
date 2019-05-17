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

<h1><strong> < ex 1 global-supervariables > </strong></h1>
<div class="container">
    <div class="row d-flex flex-column offset-md-4 justify-content-center ">
    </div>
    <div class="row d-flex flex-row justify-content-center">
        <div class="col-md-5 flex-column justify-content-center row1">
            <form method="post" action="results.php">
                <p>Enter your top 5 favo movies & tv shows :</p>
                <input name="item[0][movie]" size="20" type="text" placeholder="movie" /><br>
                <input name="item[1][movie]" size="20" type="text" placeholder="movie"/><br>
                <input name="item[2][movie]" size="20" type="text" placeholder="movie"/><br>
                <input name="item[3][movie]" size="20" type="text" placeholder="movie"/><br>
                <input name="item[4][movie]" size="20" type="text" placeholder="movie"/><br>
                <br>
                <input type="submit" value="Submit" />
            </form>
        </div>
       
        <div class="col-md-5 flex-column justify-content-center row1">
            <form method="get" action="results.php">
                <p>Enter favo country:</p>
                <input name="item[0][worstM]" size="30" type="text" placeholder="country"/><br>
                <br>
                <input type="submit" value="Submit" />
            </form>
        </div>
        <div class="col-md-5 flex-column justify-content-center row1">
            <form method="get" action="results.php">
                <p>Enter your worst movie ever seen:</p>
                <input name="item[0][worst]" size="30" type="text" placeholder="movie"/><br>
                <br>
                <input type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>

</body>
</html>