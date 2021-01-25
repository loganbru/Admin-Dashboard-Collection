import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BoxedAltComponent } from './boxed-alt.component';

describe('BoxedAltComponent', () => {
  let component: BoxedAltComponent;
  let fixture: ComponentFixture<BoxedAltComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BoxedAltComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BoxedAltComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
