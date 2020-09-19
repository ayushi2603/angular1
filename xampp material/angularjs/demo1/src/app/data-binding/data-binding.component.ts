import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-data-binding',
  templateUrl: './data-binding.component.html',
  styleUrls: ['./data-binding.component.css']
})
export class DataBindingComponent implements OnInit {
  name:string="ayushi";

  constructor() { }

  ngOnInit(): void {
  }
  greet()
  {
    alert("hello i am ayushi")
  }

}
