import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PlainLiveWidgetComponent } from './plain-live-widget.component';

describe('PlainLiveWidgetComponent', () => {
  let component: PlainLiveWidgetComponent;
  let fixture: ComponentFixture<PlainLiveWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PlainLiveWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PlainLiveWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
