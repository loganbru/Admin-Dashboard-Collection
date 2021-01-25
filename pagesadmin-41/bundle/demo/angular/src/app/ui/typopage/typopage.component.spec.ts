import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TypopageComponent } from './typopage.component';

describe('TypopageComponent', () => {
  let component: TypopageComponent;
  let fixture: ComponentFixture<TypopageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TypopageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TypopageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
