var conn;
window.onload =()=> {
    conn = new WebSocket("ws://localhost:8082/"+globalWorld)

    conn.onmessage =(e)=>{
        eJSON = JSON.parse(e.data)
        switch (eJSON.method){
            case "message":
                console.log(eJSON.data.chat)
                document.getElementsByClassName("chat")[0].innerHTML += "<b>"+eJSON.data.chat.from+":</b> "+eJSON.data.chat.body+"<br>";
                break;
        }
    }
    document.getElementsByClassName("submit-chat")[0].addEventListener("click", ()=>{
        conn.send(
            `{
                "method": "message",
                "data" : {
                    "chat" : 
                    {
                        "from": "generic",
                        "body" : "`+document.getElementsByClassName("chat-entry")[0].value+`"
                    }
                }
            }`
    )})
}
