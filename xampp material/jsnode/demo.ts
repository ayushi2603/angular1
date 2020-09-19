

//default fuction
function add(){
    return "hello student";
}
console.log(add());

//parameterize function
function sub(no1:number,no2:number){
    return no1-no2;
}
console.log(sub(50,30));

//anonymous fuction
var mul=function (no1:number,no2:number){
return no1*no2;
}
console.log("output of mul:"+mul(5,3));

// arrow function
var name1= (x:number,y:number)=>{
return "Panchashil"+x+y;
}
console.log(name1(10,20));

var name2= (x:number,y:number)=> "Infoway"+x+y;
console.log(name2(10,20))

//optional parameter fuction
var fullname=function(fname:string,lname:string,mnane:string=""){
    return fname+" "+mnane+" "+lname;
}
console.log(fullname("Panchashil","Wankhede"));
console.log(fullname("Panchashil","M","Wankhede"));

//rest parameterize fuction
var students=function(...std){
    return std;
}
console.log(students("Prashant","Anmol","Rani","Rahul"));

