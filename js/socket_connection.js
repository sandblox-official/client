const connect =(world)=> {
    let conn = new WebSocket("ws://localhost:8082/"+world)
    let connSuccess = false;
    conn.onopen =()=>{
        connSuccess = true
    }
    if(connSuccess){
        return conn
    }
}