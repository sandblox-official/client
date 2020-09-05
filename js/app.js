const MOVE = "move";
const MESSAGE = "message";
const MESSAGE = "kick";
const handleUpdates =(e)=> {
    jsonData = JSON.parse(e.data)
    switch(jsonData.method) {
        case MOVE: 
        //process movement
        break;
        case MESSAGE:
            //add message
        break;
        case KICK:
            conn.close()
            break;
        default: 
        conn.close();
    }
}
window.onload =()=> {
    let conn = connect(globalWorld)
    conn.onmessage = handleUpdates(e);
}