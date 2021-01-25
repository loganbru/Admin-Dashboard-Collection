import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SliderpageComponent } from './sliderpage.component';

describe('SliderpageComponent', () => {
  let component: SliderpageComponent;
  let fixture: ComponentFixture<SliderpageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SliderpageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SliderpageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
