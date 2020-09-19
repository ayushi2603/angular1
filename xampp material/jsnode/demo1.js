function add() {
    return "hello";
}
console.log(add());
//parametrised function
function sub(n1, n2) {
    return n1 - n2;
}
console.log(sub(30, 10));
//anonymous function
var mul = function (n1, n2) {
    return n1 * n2;
};
console.log(mul(3, 5));
//arrow function
var name1 = function (x, y) {
    return "ayushi" + x + y;
};
console.log(name1(2, 6));
