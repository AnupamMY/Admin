const express = require('express');
const { createServer } = require('node:http');
const { join } = require('node:path');
const { Server } = require('socket.io');
const cors = require('cors');

const connection = require('./db/db');  
const { Socket } = require('node:dgram');
const app = express();

app.use(cors());
const server = createServer(app);
const io = new Server(server, {
    cors: {
        origin: "http://localhost:8080",
        credentials: true
    }
});

io.on('connection', (socket) => {
   socket.on('send-message', (data) => {
    const sendMessage = async () => {
        // 
        console.log(data);
    }
    
    sendMessage();
    io.emit('new-message', data);
   });
  

});
server.listen(3000, () => {
  console.log('server running at http://localhost:3000');
});

