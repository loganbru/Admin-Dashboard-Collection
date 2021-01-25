import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProjectProgressWidgetComponent } from './project-progress-widget.component';

describe('ProjectProgressWidgetComponent', () => {
  let component: ProjectProgressWidgetComponent;
  let fixture: ComponentFixture<ProjectProgressWidgetComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProjectProgressWidgetComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProjectProgressWidgetComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
