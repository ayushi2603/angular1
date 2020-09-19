import { Component, OnInit } from '@angular/core';
import {Student} from './student'
import {FormGroup,FormControl} from '@angular/forms'

@Component({
  selector: 'app-studentregform',
  templateUrl: './studentregform.component.html',
  styleUrls: ['./studentregform.component.css']
})
export class StudentregformComponent implements OnInit {
  form: FormGroup
  student: Student[]=[]

  constructor(private_dataSer:DataService) { }
  graduation_stream:string[]=["mechanical","IT","comp-science","eltc"]

  ngOnInit(): void {
    this.form=new FormGroup(
      {
        student_name:new FormControl(""),
        student_email:new FormControl(""),
        student_age:new FormControl(""),
        student_isGraduate:new FormControl(""),
        student_branch:new FormControl(""),

      }
    )
  }
register()
{
 // this.student.push(this.form.value)
 this._dataSer.saveData(this.form.value).subscribe((res)=>{
   alert("data saves successfully")
 })
}
}
