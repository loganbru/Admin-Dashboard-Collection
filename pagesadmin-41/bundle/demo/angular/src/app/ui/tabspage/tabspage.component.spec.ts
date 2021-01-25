import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TabspageComponent } from './tabspage.component';

describe('TabspageComponent', () => {
  let component: TabspageComponent;
  let fixture: ComponentFixture<TabspageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TabspageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TabspageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
