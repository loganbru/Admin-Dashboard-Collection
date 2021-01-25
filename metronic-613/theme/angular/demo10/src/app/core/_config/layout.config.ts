import {LayoutConfigModel} from '../_base/layout';

export class LayoutConfig {
	public defaults: LayoutConfigModel = {
		demo: 'demo10',
		// == Base Layout
		self: {
			layout: 'fluid', // fluid|boxed
			body: {
				'background-image': './assets/media/misc/bg-1.jpg',
			},
			logo: {
				desktop: './assets/media/logos/logo-10.png',
				sticky: './assets/media/logos/logo-10-sm.png',
			},
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
				brand: '#5d78ff',
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
				fixed: {
					desktop: true,
					mobile: true,
				},
			},
			menu: {
				self: {
					display: true,
					'root-arrow': false,
					width: 'fixed',
				},
				desktop: {
					arrow: true,
					toggle: 'click',
					submenu: {
						skin: 'light',
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
			topbar: {
				self: {
					width: 'fixed',
				},
			},
		},
		subheader: {
			display: true,
			fixed: false,
			layout: 'subheader-v2',
			width: 'fixed',
			style: 'transparent',
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
		content: {
			width: 'fixed',
		},
		footer: {
			self: {
				width: 'fixed',
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
