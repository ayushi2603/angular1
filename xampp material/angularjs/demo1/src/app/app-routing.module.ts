import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MycomponentComponent } from './mycomponent/mycomponent.component';
import { StudentdashboardComponent } from './studentdashboard/studentdashboard.component';
import { StudentregformComponent } from './studentregform/studentregform.component';
import { UpdatestudentComponent } from './updatestudent/updatestudent.component';

const routes: Routes = [
  {path:"",component:StudentdashboardComponent},
  {path:"reg",component:StudentregformComponent},
  {path:"update/:id",component:UpdatestudentComponent}

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
