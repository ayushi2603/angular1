var http = require('http')
var fs = require('fs')
var url = require('url')
http.createServer(function (req, res) {
    console.log(req.url)
    var pathname = url.parse(req.url).pathname
    console.log("Request coming from:", pathname)
    fs.readFile(pathname.substr(1), function (err, data) {
        if (err) {
            console.log(err)
            res.writeHead(404, { 'Content-Type': 'text/html' })
        }
        else {
            res.writeHead(200, { 'Content-Type': 'text/html' })
        }
        res.write(data.toString())
        res.end()
    })

}).listen(5555)

console.log("Server is in running on http://localhost:5555")