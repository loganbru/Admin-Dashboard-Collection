// Angular
import { Component, OnInit } from '@angular/core';
// Layout
import { LayoutConfigService } from '../../../core/_base/layout';
// Object-Path
import * as objectPath from 'object-path';

@Component({
	selector: 'kt-footer',
	templateUrl: './footer.component.html',
})
export class FooterComponent implements OnInit {
	// Public properties
	today: number = Date.now();
	fluid: boolean;

	/**
	 * Component constructor
	 *
	 * @param layoutConfigService: LayouConfigService
	 */
	constructor(private layoutConfigService: LayoutConfigService) {
	}

	/**
	 * @ Lifecycle sequences => https://angular.io/guide/lifecycle-hooks
	 */

	/**
	 * On init
	 */
	ngOnInit(): void {
		const config = this.layoutConfigService.getConfig();

		// footer width fluid
		this.fluid = objectPath.get(config, 'footer.self.width') === 'fluid';
	}
}
