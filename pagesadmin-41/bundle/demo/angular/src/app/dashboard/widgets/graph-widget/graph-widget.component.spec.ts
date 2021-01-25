import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GraphWidgetComponent } from './graph-widget.component';

describe('GraphWidgetComponent', () => {
  let component: GraphWidgetComponent;
  let fixture: ComponentFixture<GraphWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GraphWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GraphWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
