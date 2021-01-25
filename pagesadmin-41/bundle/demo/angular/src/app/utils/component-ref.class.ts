import { TemplateRef, ViewContainerRef } from '@angular/core';

export class pgComponentRef<T> {
  templateRef: TemplateRef<T>;
  viewContainer: ViewContainerRef;
}
