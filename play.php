<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandblox - <?= $_GET["world"]?></title>
    <script src="js/socket_connection.js"></script>
    <script src="js/app.js"></script>
    <script> var globalWorld = '<?=$_GET["world"]?>'</script>
    <style>
        .chat-container{
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            height: 100%;
            overflow-y: auto;
            background-color: rgb(80,80,80);
            margin-bottom: 30px;
            color: white;
            padding-top: 10px;
        }
        .chat-container * {margin: 10px; margin-top: 0;
        margin-bottom: 20px;}
        .submit-chat {
            position: absolute;
            bottom: 0;
            right: 0;
            height: 20px;
            width: 80px;
            padding: 0;
            margin: 0;
            border: 0;
            background-color: transparent;
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
    <div class="chat-container">
        <div class="chat"></div>
    </div>
    <button class="submit-chat">Send</button>
    <input type="text" class="chat-entry">
</body>
</html>