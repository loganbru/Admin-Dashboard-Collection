import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CondensedBuilderComponent } from './condensed-builder.component';

describe('CondensedBuilderComponent', () => {
  let component: CondensedBuilderComponent;
  let fixture: ComponentFixture<CondensedBuilderComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CondensedBuilderComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CondensedBuilderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
