import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { StackedBarWidgetComponent } from './stacked-bar-widget.component';

describe('StackedBarWidgetComponent', () => {
  let component: StackedBarWidgetComponent;
  let fixture: ComponentFixture<StackedBarWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ StackedBarWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(StackedBarWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
