// Angular
import { AfterViewInit, Component, OnInit } from '@angular/core';
// Layout
import { LayoutConfigService } from '../../../core/_base/layout';
import { HtmlClassService } from '../html-class.service';

@Component({
	selector: 'kt-brand',
	templateUrl: './brand.component.html',
	styleUrls: ['brand.component.scss']
})
export class BrandComponent implements OnInit, AfterViewInit {
	// Public properties
	headerLogo: string;
	headerStickyLogo: string;
	menuHeaderDisplay: boolean;

	constructor(private layoutConfigService: LayoutConfigService, public htmlClassService: HtmlClassService) {
	}

	/**
	 * @ Lifecycle sequences => https://angular.io/guide/lifecycle-hooks
	 */

	/**
	 * On init
	 */
	ngOnInit(): void {
		this.headerLogo = this.layoutConfigService.getLogo();
		this.headerStickyLogo = this.layoutConfigService.getStickyLogo();

		const config = this.layoutConfigService.getConfig();

		// get menu header display option
		// this.menuHeaderDisplay = objectPath.get(config, 'header.menu.self.display');
	}

	/**
	 * On after view init
	 */
	ngAfterViewInit(): void {
	}
}
