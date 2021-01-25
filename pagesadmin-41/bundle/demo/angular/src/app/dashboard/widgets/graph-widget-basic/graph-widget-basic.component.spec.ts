import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GraphWidgetBasicComponent } from './graph-widget-basic.component';

describe('GraphWidgetBasicComponent', () => {
  let component: GraphWidgetBasicComponent;
  let fixture: ComponentFixture<GraphWidgetBasicComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GraphWidgetBasicComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GraphWidgetBasicComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
