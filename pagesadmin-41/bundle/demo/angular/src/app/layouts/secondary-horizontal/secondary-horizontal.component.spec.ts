import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SecondaryHorizontalComponent } from './secondary-horizontal.component';

describe('SecondaryHorizontalComponent', () => {
  let component: SecondaryHorizontalComponent;
  let fixture: ComponentFixture<SecondaryHorizontalComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SecondaryHorizontalComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SecondaryHorizontalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
