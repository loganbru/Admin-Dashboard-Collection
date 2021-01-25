import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FormWizardComponent } from './form-wizard.component';

describe('FormWizardComponent', () => {
  let component: FormWizardComponent;
  let fixture: ComponentFixture<FormWizardComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FormWizardComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FormWizardComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
