import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { StatTileWidgetComponent } from './stat-tile-widget.component';

describe('StatTileWidgetComponent', () => {
  let component: StatTileWidgetComponent;
  let fixture: ComponentFixture<StatTileWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ StatTileWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(StatTileWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
