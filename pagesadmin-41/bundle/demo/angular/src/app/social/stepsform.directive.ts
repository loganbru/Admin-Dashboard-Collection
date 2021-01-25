import { Directive, ElementRef, Renderer2, Input, HostListener } from '@angular/core';
declare var pg: any;
declare var stepsForm: any;

@Directive({
  selector: '[stepsform]'
})
export class StepsformDirective {

 	constructor(private select: ElementRef,private renderer: Renderer2) { 
   }
   ngOnInit() {
        // this.select = new pg.Select(this.select.nativeElement)
        var status = this.select.nativeElement
        new stepsForm(status, {
            onSubmit: function(form) {
                pg.addClass(status.querySelector('.status-form-inner'),'hide');
                // form.submit()
                // show success message
                var finalMessage  = status.querySelector('.final-message');
                if(finalMessage) finalMessage.innerHTML = '<i class="fa fa-check-circle-o"></i> Status updated';
                pg.addClass(finalMessage,'show')
            }
        });

      
	}

}
