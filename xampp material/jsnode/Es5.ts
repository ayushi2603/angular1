
var num:Array<number>=[1,2,3,4,,5,6,7,8,9];

// foreach() :
var numArray:string="";
num.forEach(
    (val)=>{
        numArray=numArray+val+" ";
    }
);
console.log(numArray);

// map():
var mapOut= num.map(
    (val)=>{
        return 2*val;
    }
);
console.log("output of map :"+mapOut);

// filter():
var filterOut=num.filter(
    (val)=>{
        return 7 < val;
    }
);
console.log("output of filter :"+filterOut);

//every 
var everyOut=num.every(
    (val)=>{
        return 5< val;
    }
);
console.log("output of every :"+everyOut);

// some: 

var someOut=num.some(
    (val)=>{
        return 5< val;
    }
);
console.log("output of some :"+someOut);

//reduce and reducright
var reduceOut=num.reduce(
    (pre:number,next:number)=>{
        return pre+next;
    }
);
console.log("output of reduce :"+reduceOut);


// Es6
let name3:string="Sweta";
const pi:number=3.14;




