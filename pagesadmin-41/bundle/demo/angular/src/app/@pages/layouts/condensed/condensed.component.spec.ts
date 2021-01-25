import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CondensedComponent } from './condensed.component';

describe('CondensedComponent', () => {
  let component: CondensedComponent;
  let fixture: ComponentFixture<CondensedComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CondensedComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CondensedComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
