export class Employee {

     empid: number;
     empName: string;
     empSalary: number;
    constructor(id: number, name: string, sal: number) {
        this.empid = id
        this.empName = name;
        this.empSalary = sal;
    }
    display() {
        // console.log("EmpID:"+this.empid+" Empname :"+this.empName+" Salary :"+this.empSalary);
        return this.empid + " " + this.empName + " " + this.empSalary;
    }
}

export class Post extends Employee {
    designation: string
    constructor(id: number, name: string, sal: number, designation: string) {
        super(id, name, sal);
        this.designation = designation;
    }
    showResult() {
        console.log("EmpID:" + this.empid + " Empname :" + this.empName + " Salary :" + this.empSalary + " " + this.designation);
    }

}

// var EmpObj=new Employee(101,"Panchashil",300000);
// // EmpObj.display();
// console.log(EmpObj.display());

// var postObj = new Post(101, "Panchashil", 300000, "Angular Developer");
// postObj.showResult();

