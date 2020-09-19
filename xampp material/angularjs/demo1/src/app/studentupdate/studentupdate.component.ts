import { Component, OnInit } from '@angular/core';
import{ActivatedRoute,Router} from '@angular/router'
import { FormGroup } from '@angular/forms';
@Component({
  selector: 'app-studentupdate',
  templateUrl: './studentupdate.component.html',
  styleUrls: ['./studentupdate.component.css']
})
export class StudentupdateComponent implements OnInit {
  form: FormGroup
  student:any=[]
  id:number
  update()
  {
    this.dataservice.updateData(this.id,this.form.value).subscribe((res)=>{
      alert("data updated successfully")
      this.router.navigateByUrl("/")
  })
  }

  constructor(private_dataService:DataService,private activatedroute:ActivatedRoute,private router:Router) { }
  graduation_stream:string[]=["mechanical","IT","comp-science","eltc"]
  ngOnInit(): void {
    this.activatedroute.params.subscribe((param)=>
    {
      this.id=param["id"]
    }
  }

}
