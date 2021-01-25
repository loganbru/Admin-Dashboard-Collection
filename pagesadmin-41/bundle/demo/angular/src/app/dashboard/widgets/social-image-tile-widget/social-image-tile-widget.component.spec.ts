import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SocialImageTileWidgetComponent } from './social-image-tile-widget.component';

describe('SocialImageTileWidgetComponent', () => {
  let component: SocialImageTileWidgetComponent;
  let fixture: ComponentFixture<SocialImageTileWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SocialImageTileWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SocialImageTileWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
