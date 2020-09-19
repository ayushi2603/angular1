import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-directory',
  templateUrl: './directory.component.html',
  styleUrls: ['./directory.component.css']
})
export class DirectoryComponent implements OnInit {s
  cond:boolean=false;
  cars:string[]=["BMW","Farari","Balino","Nano","Minicooper"];
  mychoice:string="Farari";

  constructor() { }

  ngOnInit(): void {
  }

}
