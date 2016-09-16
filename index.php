<?php
  include "includes/connection.php";
?>

<!DOCTYPE html>

<html>

<head>
  <title>My To do list app!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>

<body>

<h1>My to do list!</h1>

<div class="container.fluid tasks">

<ul>
    <?php
    //display tasks using try catch
    try {
        $viewsqlstmnt = "SELECT * FROM `todo`";
        $result = $conn->query($viewsqlstmnt);

        foreach($result as $row ){
            echo " <li><div class='row'>
                        <form action='delete.php' method='post'>
                            <div class='col-sm-8'><output contenteditable='true' class='output'>" . $row['task'] . "</output></div>
                            <div class='col-sm-2'><input type='submit' value='Update' name='Update' class='btn btn-warning' /></div>
                            <div class='col-sm-2'><input type='submit' value='Delete' name='Delete' class='btn btn-danger' /></div>
                        </form>
                    </div></li>";

        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    ?>

    <li><div class='row'>
        <form action="add.php" method="post">
            <div class='col-sm-10'><input type="text" placeholder="What do you need to do?" required="required" name="text" /></div>
            <div class='col-sm-2'><input type="submit" value="Add" name="Add" class='btn btn-lg btn-default' /></div>
        </form>
    </div></li>
</ul>
</div> <!-- container class end div -->


</body>
</html>