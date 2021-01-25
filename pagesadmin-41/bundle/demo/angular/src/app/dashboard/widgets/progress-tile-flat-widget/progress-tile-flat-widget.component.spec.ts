import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProgressTileFlatWidgetComponent } from './progress-tile-flat-widget.component';

describe('ProgressTileFlatWidgetComponent', () => {
  let component: ProgressTileFlatWidgetComponent;
  let fixture: ComponentFixture<ProgressTileFlatWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProgressTileFlatWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProgressTileFlatWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
