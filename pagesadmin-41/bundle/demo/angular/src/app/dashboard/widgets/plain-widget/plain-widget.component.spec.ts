import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PlainWidgetComponent } from './plain-widget.component';

describe('PlainWidgetComponent', () => {
  let component: PlainWidgetComponent;
  let fixture: ComponentFixture<PlainWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PlainWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PlainWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
