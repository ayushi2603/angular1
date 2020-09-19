import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http'
@Injectable({
  providedIn: 'root'
})
export class DataService {
  api:string="http://localhost:8888/student/"

  
  saveData(data){
    return this.httpclient.post(this.api,data)
  }
  getDataById(Id){
    return this.httpclient.get(this.api+id)
  }
  getData(){
    return this.httpclient.get(this.api)
  }
  updateData(id,data){
    return this.httpclient.put(this.api+id,data)
  }
  constructor(private httpclient:HttpClient) {}
}
