import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ButtonspageComponent } from './buttonspage.component';

describe('ButtonspageComponent', () => {
  let component: ButtonspageComponent;
  let fixture: ComponentFixture<ButtonspageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ButtonspageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ButtonspageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
