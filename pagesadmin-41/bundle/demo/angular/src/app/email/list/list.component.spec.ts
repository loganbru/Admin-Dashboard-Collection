import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EmailListComponent } from './list.component';

describe('ListComponent', () => {
  let component: EmailListComponent;
  let fixture: ComponentFixture<EmailListComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EmailListComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EmailListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
