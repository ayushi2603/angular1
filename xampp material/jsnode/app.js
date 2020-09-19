var mylog = require('./log.js')


mylog.info('Calling local module from app')

console.log (mylog.add(20,10))
console.log (mylog.multiply(20,10))
console.log (mylog.subtraction(20,10))