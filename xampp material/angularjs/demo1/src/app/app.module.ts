import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { DataBindingComponent } from './data-binding/data-binding.component';
import {FormsModule} from '@angular/forms';
import {DirectoryComponent} from './directory/directory.component';
import{StudentregformComponent} from './studentregform/studentregform.component';
import {ReactiveFormsModule} from '@angular/forms';
import {DataService} from './data.service';
import {HttpClientModule} from '@angular/common/http';
import { StudentupdateComponent } from './studentupdate/studentupdate.component';
import { UpdatestudentComponent } from './updatestudent/updatestudent.component';

@NgModule({
  declarations: [
    AppComponent,
    DataBindingComponent,
    DirectoryComponent,
    StudentregformComponent,
    StudentupdateComponent,
    UpdatestudentComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule
  ],
  providers: [DataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
