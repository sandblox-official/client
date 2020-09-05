<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandblox - Worlds</title>
</head>
<body>
    <?php require_once("util/api_call.php")?>
    <?php require_once("util/link_print.php")?>
    <?php
        $resultJSON = callAPI("GET", "http://localhost:8080/worlds", "");
        $results = json_decode($resultJSON);
        foreach ($results as $result){
            linkPrint("/play.php?world=".$result->name, $result->name);
            echo "<br>";
        }
    ?>
</body>
</html>