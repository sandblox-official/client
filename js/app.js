var conn;

    //Canvas
    var canvas = document.getElementsByTagName("canvas")[0];
    canvas.style.width  = "calc(100% - 400px)";
    canvas.style.height  = "100%";
    canvas.style.padding = "0";
    canvas.style.margin = "0";
    var engine = new BABYLON.Engine(canvas, true);
    //createScene is a global function provided by db src. Call it to create
    
    var scene = createScene();
    engine.runRenderLoop(function () {
        scene.render();
    });

    //Websockets
    conn = new WebSocket("ws://localhost:8082/" + globalWorld)

    conn.onmessage = (e) => {
        eJSON = JSON.parse(e.data)
        switch (eJSON.method) {
            case "message":
                console.log(eJSON.data.chat)
                document.getElementsByClassName("chat")[0].innerHTML += "<b>" + eJSON.data.chat.from + ":</b> " + eJSON.data.chat.body + "<br>";
                break;
        }
    }
    document.getElementsByClassName("submit-chat")[0].addEventListener("click", () => {
        conn.send(
            `{
                "method": "message",
                "data" : {
                    "chat" : 
                    {
                        "from": "generic",
                        "body" : "`+ document.getElementsByClassName("chat-entry")[0].value + `"
                    }
                }
            }`
        )
        var element = document.getElementsByClassName("chat")[0];
        function scrollToBottom(eement) {
            e.scrollTop = e.scrollHeight - e.getBoundingClientRect().height;
        }
    })
