import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ImageWidgetBasicComponent } from './image-widget-basic.component';

describe('ImageWidgetBasicComponent', () => {
  let component: ImageWidgetBasicComponent;
  let fixture: ComponentFixture<ImageWidgetBasicComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ImageWidgetBasicComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ImageWidgetBasicComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
