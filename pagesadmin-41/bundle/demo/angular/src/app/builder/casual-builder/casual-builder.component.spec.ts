import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CasualBuilderComponent } from './casual-builder.component';

describe('CasualBuilderComponent', () => {
  let component: CasualBuilderComponent;
  let fixture: ComponentFixture<CasualBuilderComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CasualBuilderComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CasualBuilderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
