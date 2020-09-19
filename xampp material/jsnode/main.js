var express = require('express')
var app = express()

app.get('/',function(req,res){
    res.end('Hi From Express Server !')
})
app.get('/user',function(req,res){
    res.end('Request received from post')
})

app.get('/login',function(req,res){
    res.sendFile(__dirname+"/" + "login.htm")
})

app.get('/process_data',function(req,res){
    res = {
        uname : req.query.login,
        upass : req.query.pass
    }
    console.log(res)
    //res.end(JSON.stringify(res))
})



var server = app.listen(8081,function(){
    var host = server.address().address
    var port = server.address().port
    console.log('Express application running on http://%s%s',host,port)
})