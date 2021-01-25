import { Component, OnInit } from '@angular/core';
import {
  FormBuilder,
  FormGroup,
  FormControl,
  Validators,
  ReactiveFormsModule
} from '@angular/forms';
@Component({
  selector: 'app-form-layouts',
  templateUrl: './form-layouts.component.html',
  styleUrls: ['./form-layouts.component.scss']
})
export class FormLayoutsComponent implements OnInit {

  //Sample Form Data 
  fName;
  lName;
  username;
  password;
  email;
  HorizontalfName;
  HorizontalWork;
  HorizontalPosition;
  
  constructor(private fb: FormBuilder) { 
    this.attachedForm = this.fb.group({
      projectName :[ '', [ Validators.required ] ],
      firstName :[ '', [ Validators.required ] ],
      lastName :[ '', [ Validators.required ] ],
      investor :[ '', [ Validators.required ] ],
      startDate :[ '', [ Validators.required ] ],
      endDate :[ '', [ Validators.required ] ],
      budget :[ '', [ Validators.required ] ],
      profit :[ '', [ Validators.required ] ],
      revenue :[ '', [ Validators.required ] ],
      url :[ '', [ Validators.required ] ],
    });
    
  }
  attachedForm: FormGroup;
  ngOnInit() {
  }
  isFieldValid(field: string) {
    return !this.attachedForm.get(field).valid && this.attachedForm.get(field).touched;
  }
  
  displayFieldCss(field: string) {
    return {
      'has-error': this.isFieldValid(field),
      'has-feedback': this.isFieldValid(field)
    };
  }

  getFormControl(name) {
    return this.attachedForm.controls[ name ];
  }
  _submitForm() {
    for (const i in this.attachedForm.controls) {
      this.attachedForm.controls[ i ].markAsDirty();
    }
  }
}
