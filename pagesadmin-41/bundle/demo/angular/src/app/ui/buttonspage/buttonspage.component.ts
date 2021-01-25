import { Component, OnInit } from '@angular/core';
import {  FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-buttonspage',
  templateUrl: './buttonspage.component.html',
  styleUrls: ['./buttonspage.component.scss']
})
export class ButtonspageComponent implements OnInit {

  //Single Button Toggle
  singleModel: string = '1';
  //Select All Button group Toggle
  checkModel: any = { left: false, middle: true, right: false };
  //Select Group Single toggle
  myForm: FormGroup;

  radioModel: string = 'Middle';
  constructor(private formBuilder: FormBuilder) {

  }

  ngOnInit() {
    this.myForm = this.formBuilder.group({
      radio: 'C'
    });
  }

}
