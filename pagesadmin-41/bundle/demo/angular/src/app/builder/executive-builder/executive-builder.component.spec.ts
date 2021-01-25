import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExecutiveBuilderComponent } from './executive-builder.component';

describe('ExecutiveBuilderComponent', () => {
  let component: ExecutiveBuilderComponent;
  let fixture: ComponentFixture<ExecutiveBuilderComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExecutiveBuilderComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExecutiveBuilderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
