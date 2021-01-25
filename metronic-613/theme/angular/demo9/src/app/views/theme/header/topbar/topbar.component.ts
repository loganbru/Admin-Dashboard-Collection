// Angular
import { Component, HostBinding } from '@angular/core';

@Component({
	selector: 'kt-topbar',
	templateUrl: './topbar.component.html',
	styleUrls: ['./topbar.component.scss'],
})
export class TopbarComponent {

	@HostBinding('class') classes = 'kt-header__topbar kt-grid__item';

}
