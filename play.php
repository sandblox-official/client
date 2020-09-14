<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script> var globalWorld = '<?=$_GET["world"]?>';</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandblox - <?= $_GET["world"]?></title>
    <style>

        .chat-container{
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            height: calc(100% - 20px);
            overflow-y: auto;
            background-color: rgb(80,80,80);
            margin-bottom: 30px;
            color: white;
            display: flex;
            flex-direction: column-reverse;
        }
        .chat-container * {
            margin: 10px; margin-top: 0;
            margin-bottom: 4px;
            overflow-anchor: none;
        }
         body div.chat-container:first-child{
            margin-bottom: 20px;
        }
        .submit-chat {
            position: absolute;
            bottom: 0;
            right: 0;
            height: 20px;
            width: 80px;
            padding: 0;
            margin: 0;
            border: 0;
            background-color: rgb(80,80,80);
            color: white;
        }
        .chat-entry{
            position: absolute;
            bottom: 0;
            right: 0;
            height: 20px;
            width: 320px;
            padding: 0;
            margin: 0;
            border: 0;
            margin-right: 80px;
            background-image: linear-gradient(-90deg, rgba(80,80,80, 1), rgba(80,80,80, .7));
            color: white;
        }
    </style>
</head>
<body>
    <canvas></canvas>
    <div class="chat-container">
        <div class="chat">
            <div class="anchor"></div>
        </div>
    </div>
    <button class="submit-chat">Send</button>
    <input type="text" class="chat-entry">
</body>
<script src="https://cdn.babylonjs.com/babylon.max.js"></script>
<script>
    <?php
        require_once(__DIR__."/util/api_call.php");
        $resultJSON = callAPI("GET", "http://localhost:8080/worlds/".$_GET["world"], "");
        $result = json_decode($resultJSON);
        echo("var createScene =()=>{".$result->js."}");
    ?>
        
    </script>
    <script src="js/app.js"></script>
</html>