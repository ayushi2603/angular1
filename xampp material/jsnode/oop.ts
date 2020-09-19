class Student{
     name:string="Panchashil Wankhede";
     salary:number=123;
     isMarried:boolean=true;
     display(){
          return this.name+' '+this.salary+' '+this.isMarried;
     }
}

var empObj=new Student();
console.log(empObj.name);
console.log(empObj.display());