import { Component, OnInit } from '@angular/core';
import {FormGroup,FormControl} from '@angular/forms'
import { DataService } from '../data.service';
import {ActivatedRoute, Router} from '@angular/router'

@Component({
  selector: 'app-updatestudent',
  templateUrl: './updatestudent.component.html',
  styleUrls: ['./updatestudent.component.css']
})
export class UpdatestudentComponent implements OnInit {
  form : FormGroup
  student:any = []
  id:number
  update()
  {
    this.dataservice.updateData(this.id,this.form.value).subscribe((res)=>{
      alert("Data Updated successfully Successfully")
      this.router.navigateByUrl("/")
    })
  }

  constructor(private dataservice:DataService,private activatedroute:ActivatedRoute,private route) { }
  
  graduation_stream :string[]= 
  ["Mechanical","IT", "Comp Science","E&TC"]

  ngOnInit(): void {
    this.activatedroute.params.subscribe((param)=>
  {
    this.id = param["id"]
    this.dataservice.getDataById(this.id).subscribe((data)=>{
      this.student = data
      this.form = new FormGroup(
        {
        student_name:new FormControl(this.student.student_name),
        student_email:new FormControl(this.student.student_email),
        student_age:new FormControl(this.student.student_age),
        student_isGraduate:new FormControl(this.student.student_isGraduate),
        student_branch : new FormControl(this.student.student_branch)
      })
    })
  })
   
  }


}

