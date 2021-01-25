import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TableBasicWidgetComponent } from './table-basic-widget.component';

describe('TableBasicWidgetComponent', () => {
  let component: TableBasicWidgetComponent;
  let fixture: ComponentFixture<TableBasicWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TableBasicWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TableBasicWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
