var cors = require('cors')
var express=require('express');
var app = express();
var http = require('http').createServer(app);
var io = require('socket.io')(http);
// var path=require('path');
app.set('port', process.env.PORT || 3000);
app.use(cors());
app.use(express.urlencoded({extended:false}));
app.use(express.json());
// app.use(express.static(__dirname + '/public'));

app.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html');
});
io.on('connection',(socket)=>{
    console.log('newuser')
})
io.on('connection', async (socket) => {
    socket.on('chatmessage', (msg) => {
        io.emit('chatmessage', msg);
    });
});
http.listen(app.get('port'), function(){
    console.log('listening on *:'+app.get('port'));
});


