var log= {
    info: function(info){
        console.log('Info: ' + info)
    },
    warning: function(warning){
        console.log('Warning: ' + warning)
    },
    error: function(error){
        console.log('Error: ' + error)
    }
};


function add(x,y){
    return x+y;
}

function multiply(x,y){
    return x*y;
}
function subtraction(x,y)
{
    return x-y;
}


module.exports = log
module.exports.add = add;
module.exports.multiply = multiply;
module.exports.subtraction=subtraction;
//module.exports = log