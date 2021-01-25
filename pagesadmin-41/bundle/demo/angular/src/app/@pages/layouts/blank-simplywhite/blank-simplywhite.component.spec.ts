import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BlankSimplywhiteComponent } from './blank-simplywhite.component';

describe('BlankSimplywhiteComponent', () => {
  let component: BlankSimplywhiteComponent;
  let fixture: ComponentFixture<BlankSimplywhiteComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BlankSimplywhiteComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BlankSimplywhiteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
