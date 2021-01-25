import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-register-page',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterPageComponent implements OnInit {
  //Sample Variables for the form
  txtfname;
  txtlname;
  txtusername;
  txtpassword;
  txtemail;

  constructor() { }

  ngOnInit() {
  }

}
