import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CasualDashboardComponent } from './dashboard.component';

describe('CasualDashboardComponent', () => {
  let component: CasualDashboardComponent;
  let fixture: ComponentFixture<CasualDashboardComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CasualDashboardComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CasualDashboardComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
