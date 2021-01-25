import {LayoutConfigModel} from '../_base/layout';

export class LayoutConfig {
	public defaults: LayoutConfigModel = {
		demo: 'demo8',
		// == Base Layout
		self: {
			layout: 'fluid', // fluid|boxed
			body: {
				'background-image': './assets/media/demos/demo8/bg-1.jpg',
				'background-position': 'center top',
			},
			logo: './assets/media/logos/logo-8.png',
		},
		// == Page Splash Screen loading
		loader: {
			enabled: true,
			type: 'spinner-logo',
			logo: './assets/media/logos/logo-mini-md.png',
			message: 'Please wait...',
		},
		// == Colors for javascript
		colors: {
			state: {
				brand: '#716aca',
				light: '#ffffff',
				dark: '#282a3c',
				primary: '#5867dd',
				success: '#34bfa3',
				info: '#36a3f7',
				warning: '#ffb822',
				danger: '#fd3995',
			},
			base: {
				label: [
					'#c5cbe3',
					'#a1a8c3',
					'#3d4465',
					'#3e4466',
				],
				shape: [
					'#f0f3ff',
					'#d9dffa',
					'#afb4d4',
					'#646c9a',
				],
			},
		},
		header: {
			self: {
				width: 'fluid',
				fixed: {
					desktop: true,
					mobile: true,
				},
			},
			menu: {
				self: {
					display: true,
					'root-arrow': true,
				},
				desktop: {
					arrow: true,
					toggle: 'click',
					submenu: {
						arrow: true,
					},
				},
				mobile: {
					submenu: {
						skin: 'dark',
						accordion: true,
					},
				},
			},
		},
		subheader: {
			display: true,
			fixed: false,
			layout: 'subheader-v1',
			width: 'fixed',
			style: 'transparent',
		},
		content: {
			width: 'fluid',
		},
		aside: {
			self: {
				skin: 'light',
				fixed: true,
				display: false,
				minimize: {
					toggle: true,
					default: false,
				},
			},
			menu: {
				dropdown: false,
				scroll: true,
				submenu: {
					accordion: true,
					dropdown: {
						arrow: true,
						'hover-timeout': 500,
					},
				},
			},
		},
		footer: {
			self: {
				width: 'fluid',
			},
		},
	};

	/**
	 * Good place for getting the remote config
	 */
	public get configs(): LayoutConfigModel {
		return this.defaults;
	}
}
