import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BlankCasualComponent } from './blank-casual.component';

describe('BlankCasualComponent', () => {
  let component: BlankCasualComponent;
  let fixture: ComponentFixture<BlankCasualComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BlankCasualComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BlankCasualComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
