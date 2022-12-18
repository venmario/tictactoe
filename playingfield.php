<?php 
// if(!isset($_SESSION['username'])){
//     header('Location: login.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>TicTacToe</title>
</head>

<body>

    <div class="container">
        <div class="player1">p1</div>
        <div class="aside" id="side1">side1</div>
        <div class="aside" id="side2">side2</div>
        <div class="gameboard">
            <div class="row" id="row1">
                <div class="col col1"></div>
                <div class="col col2"></div>
                <div class="col col3"></div>
            </div>
            <div class="row" id="row2">
                <div class="col col1"></div>
                <div class="col col2"></div>
                <div class="col col3"></div>
            </div>
            <div class="row" id="row3">
                <div class="col col1"></div>
                <div class="col col2"></div>
                <div class="col col3"></div>
            </div>
        </div>
        <div class="player2">p2</div>
    </div>
</body>

</html>