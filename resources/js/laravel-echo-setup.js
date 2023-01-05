// import Echo from 'laravel-echo';
// window.Echo = new Echo({
// broadcaster: 'socket.io',
// host: window.location.hostname + ":" + window.laravel_echo_port,
// transport: 'websocket'

// });
import Echo from "laravel-echo"
window.io = require('socket.io-client');
if (typeof io !== 'undefined') { 
   window.Echo = new Echo(
    {    
      broadcaster: 'socket.io',
          
      host: window.location.hostname + ':6001', 
      transports: ['websocket', 'polling', 'flashsocket'] 
    }
      );
  }