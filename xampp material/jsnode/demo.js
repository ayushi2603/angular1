/*var http = require('http')

var server = http.createServer(function(req,res){
    console.log("node demo")
    res.end("server creation")
});

server.listen(5000)
*/
var mylog = require('./log.js')

mylog.info('Calling local module from demo')