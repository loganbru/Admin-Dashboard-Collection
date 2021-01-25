import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExecutiveLayout } from './executive.component';

describe('ExecutiveComponent', () => {
  let component: ExecutiveLayout;
  let fixture: ComponentFixture<ExecutiveLayout>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExecutiveLayout ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExecutiveLayout);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
