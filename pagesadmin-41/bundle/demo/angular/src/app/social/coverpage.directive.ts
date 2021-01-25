import { Directive, ElementRef, Renderer2, Input, HostListener } from '@angular/core';
declare var pg: any;

@Directive({
  selector: '[coverpage]'
})
export class CoverpageDirective {

 	constructor(private coverpage: ElementRef,private renderer: Renderer2) { 
   }
   ngOnInit() {
        // this.select = new pg.Select(this.select.nativeElement)
    var coverpage = this.coverpage.nativeElement
      // Prevent 'vh' bug on iOS7
    if(pg.getUserAgent() == 'mobile'){
      coverpage.style.height ="400px";
    }

      
	}

}
