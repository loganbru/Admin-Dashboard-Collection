import Dashboard from '../views/dashboard/dashboard';

//Ui-components Dropdown
import Alerts from '../views/ui-components/alert';
import Badges from '../views/ui-components/badge';
import Breadcrumbs from '../views/ui-components/breadcrumb';
import Buttons from '../views/ui-components/button';
import Dropdowns from '../views/ui-components/dropdown';
import BtnGroups from '../views/ui-components/btn-group';
import Cards from '../views/ui-components/cards';
import CollapseComponent from '../views/ui-components/collapse';
import CarouselComponent from '../views/ui-components/carousel';
import JumbotronComponent from '../views/ui-components/jumbotron';
import LayoutComponent from '../views/ui-components/layout';
import ListComponent from '../views/ui-components/listgroup';
import MediaComponent from '../views/ui-components/media';
import ModalComponent from '../views/ui-components/modal';
import NavbarComponent from '../views/ui-components/navbar';
import NavsComponent from '../views/ui-components/navs';
import PaginationComponent from '../views/ui-components/pagination';
import PopoverComponent from '../views/ui-components/popover';
import ProgressComponent from '../views/ui-components/progress';
import TableComponent from '../views/ui-components/table';
import TabsComponent from '../views/ui-components/tabs';
import TooltipComponent from '../views/ui-components/tooltip';


var ThemeRoutes = [
	{
		navlabel: true,
		name: "Personal",
		icon: "mdi mdi-dots-horizontal",
	},
	{
		path: '/dashboard',
		name: 'Dashboard',
		icon: 'ti-dashboard',
		component: Dashboard
	},
	{
		navlabel: true,
		name: "Ui-Components",
		icon: "mdi mdi-dots-horizontal",
	},
	{
		path: '/ui-components/alert',
		name: 'Alerts',
		icon: 'mdi mdi-comment-processing-outline',
		component: Alerts
	},
	{
		path: '/ui-components/badge',
		name: 'Badges',
		icon: 'mdi mdi-arrange-send-backward',
		component: Badges
	},
	{
		path: '/ui-components/breadcrumb',
		name: 'Breadcrumbs',
		icon: 'mdi mdi-equal',
		component: Breadcrumbs
	},
	{
		path: '/ui-components/button',
		name: 'Buttons',
		icon: 'mdi mdi-toggle-switch',
		component: Buttons
	},
	{
		path: '/ui-components/dropdown',
		name: 'Button Dropdown',
		icon: 'mdi mdi-cards-variant',
		component: Dropdowns
	},
	{
		path: '/ui-components/btn-group',
		name: 'Button Group',
		icon: 'mdi mdi-checkbox-multiple-blank',
		component: BtnGroups
	},
	{
		path: '/ui-components/card',
		name: 'Cards',
		icon: 'mdi mdi-credit-card-multiple',
		component: Cards
	},
	{
		path: '/ui-components/collapse',
		name: 'Collapse',
		icon: 'mdi mdi-elevator',
		component: CollapseComponent
	},
	{
		path: '/ui-components/carousel',
		name: 'Carousel',
		icon: 'mdi mdi-view-carousel',
		component: CarouselComponent
	},
	{
		path: '/ui-components/jumbotron',
		name: 'Jumbotron',
		icon: 'mdi mdi-hamburger',
		component: JumbotronComponent
	},
	{
		path: '/ui-components/layout',
		name: 'Layout',
		icon: 'mdi mdi-apps',
		component: LayoutComponent
	},
	{
		path: '/ui-components/listgroup',
		name: 'List Group',
		icon: 'mdi mdi-format-list-bulleted',
		component: ListComponent
	},
	{
		path: '/ui-components/media',
		name: 'Media',
		icon: 'mdi mdi-folder-multiple-image',
		component: MediaComponent
	},
	{
		path: '/ui-components/modal',
		name: 'Modal',
		icon: 'mdi mdi mdi-tablet',
		component: ModalComponent
	},
	{
		path: '/ui-components/navbar',
		name: 'Navbar',
		icon: 'mdi mdi-page-layout-header',
		component: NavbarComponent
	},
	{
		path: '/ui-components/navs',
		name: 'Navs',
		icon: 'mdi mdi-panorama-wide-angle',
		component: NavsComponent
	},
	{
		path: '/ui-components/pagination',
		name: 'Pagination',
		icon: 'mdi mdi-priority-high',
		component: PaginationComponent
	},
	{
		path: '/ui-components/popover',
		name: 'Popover',
		icon: 'mdi mdi-pencil-circle',
		component: PopoverComponent
	},
	{
		path: '/ui-components/progress',
		name: 'Progress',
		icon: 'mdi mdi-poll',
		component: ProgressComponent
	},
	{
		path: '/ui-components/table',
		name: 'Tables',
		icon: 'mdi mdi-border-none',
		component: TableComponent
	},
	{
		path: '/ui-components/tabs',
		name: 'Tabs',
		icon: 'mdi mdi-tab-unselected',
		component: TabsComponent
	},
	{
		path: '/ui-components/tooltip',
		name: 'Tooltips',
		icon: 'mdi mdi-image-filter-vintage',
		component: TooltipComponent
	},
	{ path: '/', pathTo: '/dashboard', name: 'Dashboard', redirect: true }
];
export default ThemeRoutes;
