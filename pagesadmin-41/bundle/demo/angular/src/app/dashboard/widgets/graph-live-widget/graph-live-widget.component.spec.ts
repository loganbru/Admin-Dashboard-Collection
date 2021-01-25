import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GraphLiveWidgetComponent } from './graph-live-widget.component';

describe('GraphLiveWidgetComponent', () => {
  let component: GraphLiveWidgetComponent;
  let fixture: ComponentFixture<GraphLiveWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GraphLiveWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GraphLiveWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
