import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GraphOptionsWidgetComponent } from './graph-options-widget.component';

describe('GraphOptionsWidgetComponent', () => {
  let component: GraphOptionsWidgetComponent;
  let fixture: ComponentFixture<GraphOptionsWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GraphOptionsWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GraphOptionsWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
