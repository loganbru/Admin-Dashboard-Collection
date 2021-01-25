import React from 'react';
import { connect } from 'react-redux';
import {
	Nav,
	NavItem,
	NavLink,
	Button,
	Navbar,
	NavbarBrand,
	Collapse,
	UncontrolledDropdown,
	DropdownToggle,
	DropdownMenu,
	UncontrolledCarousel,
	Progress,
	ListGroup,
	ListGroupItem,
	Row,
	Col,
	Form,
	FormGroup,
	Input
} from 'reactstrap';
import * as data from './data';

/*--------------------------------------------------------------------------------*/
/* Import images which are need for the HEADER                                    */
/*--------------------------------------------------------------------------------*/
import logodarkicon from '../../../assets/images/logo-icon.png';
import logolighticon from '../../../assets/images/logo-light-icon.png';
import logodarktext from '../../../assets/images/logo-text.png';
import logolighttext from '../../../assets/images/logo-light-text.png';

const mapStateToProps = state => ({
	...state
});

class Header extends React.Component {
	constructor(props) {
		super(props);
		this.toggle = this.toggle.bind(this);
		this.showMobilemenu = this.showMobilemenu.bind(this);
		this.sidebarHandler = this.sidebarHandler.bind(this);
		this.state = {
			isOpen: false
		};
	}
	/*--------------------------------------------------------------------------------*/
	/*To open NAVBAR in MOBILE VIEW                                                   */
	/*--------------------------------------------------------------------------------*/
	toggle() {
		this.setState({
			isOpen: !this.state.isOpen
		});
	}
	/*--------------------------------------------------------------------------------*/
	/*To open SIDEBAR-MENU in MOBILE VIEW                                             */
	/*--------------------------------------------------------------------------------*/
	showMobilemenu() {
		document.getElementById('main-wrapper').classList.toggle('show-sidebar');
	}
	sidebarHandler = () => {
		let element = document.getElementById('main-wrapper');
		switch (this.props.settings.activeSidebarType) {
			case 'full':
			case 'iconbar':
				element.classList.toggle('mini-sidebar');
				if (element.classList.contains('mini-sidebar')) {
					element.setAttribute('data-sidebartype', 'mini-sidebar');
				} else {
					element.setAttribute(
						'data-sidebartype',
						this.props.settings.activeSidebarType
					);
				}
				break;

			case 'overlay':
			case 'mini-sidebar':
				element.classList.toggle('full');
				if (element.classList.contains('full')) {
					element.setAttribute('data-sidebartype', 'full');
				} else {
					element.setAttribute(
						'data-sidebartype',
						this.props.settings.activeSidebarType
					);
				}
				break;
			default:
		}
	};

	render() {
		return (
			<header className="topbar navbarbg" data-navbarbg={this.props.settings.activeNavbarBg}>
				<Navbar className={"top-navbar " + (this.props.settings.activeNavbarBg === "skin6" ? 'navbar-light' : 'navbar-dark')} expand="md">
					<div className="navbar-header" id="logobg" data-logobg={this.props.settings.activeLogoBg}>
						{/*--------------------------------------------------------------------------------*/}
						{/* Mobile View Toggler  [visible only after 768px screen]                         */}
						{/*--------------------------------------------------------------------------------*/}
						<span className="nav-toggler d-block d-md-none" onClick={this.showMobilemenu}>
							<i className="ti-menu ti-close" />
						</span>
						{/*--------------------------------------------------------------------------------*/}
						{/* Logos Or Icon will be goes here for Light Layout && Dark Layout                */}
						{/*--------------------------------------------------------------------------------*/}
						<NavbarBrand href="/">
							<b className="logo-icon">
								<img src={logodarkicon} alt="homepage" className="dark-logo" />
								<img
									src={logolighticon}
									alt="homepage"
									className="light-logo"
								/>
							</b>
							<span className="logo-text">
								<img src={logodarktext} alt="homepage" className="dark-logo" />
								<img
									src={logolighttext}
									className="light-logo"
									alt="homepage"
								/>
							</span>
						</NavbarBrand>
						{/*--------------------------------------------------------------------------------*/}
						{/* Mobile View Toggler  [visible only after 768px screen]                         */}
						{/*--------------------------------------------------------------------------------*/}
						<span className="topbartoggler d-block d-md-none" onClick={this.toggle}>
							<i className="ti-more" />
						</span>
					</div>
					<Collapse className="navbarbg" isOpen={this.state.isOpen} navbar data-navbarbg={this.props.settings.activeNavbarBg} >
						<Nav className="float-left" navbar>
							<NavItem>
								<NavLink href="#" className="d-none d-md-block" onClick={this.sidebarHandler}>
									<i className="icon-menu" />
								</NavLink>
							</NavItem>
							<NavItem>
								<form className="app-search">
									<input type="text" className="form-control" placeholder="Search & enter" />
								</form>
							</NavItem>
						</Nav>
						<Nav className="ml-auto float-right" navbar>
							{/*--------------------------------------------------------------------------------*/}
							{/* Start Notifications Dropdown                                                   */}
							{/*--------------------------------------------------------------------------------*/}
							<UncontrolledDropdown nav inNavbar>
								<DropdownToggle nav caret>
									<i className="icon-note font-16" />
								</DropdownToggle>
								<DropdownMenu right className="mailbox">
									<div className="d-flex no-block align-items-center p-3 bg-light">
										<h5 className="mb-0 font-medium">5 New Notifications</h5>
									</div>
									<div className="message-center notifications">
										{/*<!-- Message -->*/}
										{data.notifications.map((notification, index) => {
											return (
												<span href="" className="message-item" key={index}>
													<span className={"btn btn-circle btn-" + notification.iconbg}>
														<i className={notification.iconclass} />
													</span>
													<div className="mail-contnet">
														<h5 className="message-title">{notification.title}</h5>
														<span className="mail-desc">
															{notification.desc}
														</span>
														<span className="time">{notification.time}</span>
													</div>
												</span>
											);
										})}
									</div>
									<a className="nav-link text-center mb-1 text-dark" href=";">
										<strong>Check all notifications</strong>{' '}
										<i className="fa fa-angle-right" />
									</a>
								</DropdownMenu>
							</UncontrolledDropdown>
							{/*--------------------------------------------------------------------------------*/}
							{/* End Notifications Dropdown                                                     */}
							{/*--------------------------------------------------------------------------------*/}
							{/*--------------------------------------------------------------------------------*/}
							{/* Start Messages Dropdown                                                        */}
							{/*--------------------------------------------------------------------------------*/}
							<UncontrolledDropdown nav inNavbar>
								<DropdownToggle nav caret>
									<i className="font-16 ti-email" />
								</DropdownToggle>
								<DropdownMenu right className="mailbox">
									<div className="d-flex no-block align-items-center p-3 bg-light">
										<h5 className="mb-0 font-medium">5 New Messages</h5>
									</div>
									<div className="message-center message-body">
										{/*<!-- Message -->*/}
										{data.messages.map((message, index) => {
											return (
												<span href="" className="message-item" key={index}>
													<span className="user-img">
														<img src=
															{message.image}
															alt="user"
															className="rounded-circle"
															width=""
														/>
														<span className={"profile-status pull-right " + message.status}></span>
													</span>
													<div className="mail-contnet">
														<h5 className="message-title">{message.title}</h5>
														<span className="mail-desc">{message.desc}</span>
														<span className="time">{message.time}</span>
													</div>
												</span>
											);
										})}
									</div>
									<span className="nav-link text-center link text-dark" href="">
										<b>See all e-Mails</b> <i className="fa fa-angle-right" />
									</span>
								</DropdownMenu>
							</UncontrolledDropdown>
							{/*--------------------------------------------------------------------------------*/}
							{/* End Messages Dropdown                                                          */}
							{/*--------------------------------------------------------------------------------*/}
							{/*--------------------------------------------------------------------------------*/}
							{/* Start Mega Menu Dropdown                                                       */}
							{/*--------------------------------------------------------------------------------*/}
							<UncontrolledDropdown nav inNavbar className="mega-dropdown">
								<DropdownToggle nav> <i className="ti-layout-width-default font-16" /></DropdownToggle>
								<DropdownMenu>
									<Row>
										{/*--------------------------------------------------------------------------------*/}
										{/* Carousel [Item-1]                                                              */}
										{/*--------------------------------------------------------------------------------*/}
										<Col xs="12" sm="12" md="12" lg="3">
											<h5 className="mb-3 text-uppercase">Carousel</h5>
											<UncontrolledCarousel items={data.items} />
										</Col>
										{/*--------------------------------------------------------------------------------*/}
										{/* Progress [Item-2]                                                              */}
										{/*--------------------------------------------------------------------------------*/}
										<Col xs="12" sm="12" md="12" lg="3">
											<h5 className="mb-3 text-uppercase">Progress</h5>
											<div className="d-flex no-block align-items-center mb-2">
												<span>Sales</span>
												<div className="ml-auto">
													<span className="text-primary">
														<i className="mdi mdi-chart-areaspline" />
													</span>
												</div>
											</div>
											<Progress className="mb-3" animated value={2 * 5} />
											<div className="d-flex no-block align-items-center mb-2">
												<span>Marketing</span>
												<div className="ml-auto">
													<span className="text-success">
														<i className="mdi mdi-chart-line" />
													</span>
												</div>
											</div>
											<Progress className="mb-3" animated color="success" value="25" />
											<div className="d-flex no-block align-items-center mb-2">
												<span>Accouting</span>
												<div className="ml-auto">
													<span className="text-danger">
														<i className="mdi mdi-chart-arc" />
													</span>
												</div>
											</div>
											<Progress className="mb-3" animated color="danger" value={50} />
											<div className="d-flex no-block align-items-center mb-2">
												<span>Sales Ratio</span>
												<div className="ml-auto">
													<span className="text-warning">
														<i className="mdi mdi-chart-pie" />
													</span>
												</div>
											</div>
											<Progress className="mb-3" animated color="warning" value={70} />
										</Col>
										{/*--------------------------------------------------------------------------------*/}
										{/* Contact Us [Item-3]                                                            */}
										{/*--------------------------------------------------------------------------------*/}
										<Col xs="12" sm="12" md="12" lg="3">
											<h5 className="mb-3 text-uppercase">Contact Us</h5>
											<Form>
												<FormGroup>
													<Input
														type="text"
														name="name"
														id="textname"
														placeholder="Enter Name Here"
													/>
												</FormGroup>
												<FormGroup>
													<Input
														type="email"
														name="email"
														id="exampleEmail"
														placeholder="Enter Email Here"
													/>
												</FormGroup>
												<FormGroup>
													<Input
														type="textarea"
														name="text"
														id="exampleText"
														placeholder="Message"
													/>
												</FormGroup>
												<Button color="primary">Submit</Button>
											</Form>
										</Col>
										{/*--------------------------------------------------------------------------------*/}
										{/* List Style [Item-4]                                                            */}
										{/*--------------------------------------------------------------------------------*/}
										<Col xs="12" sm="12" md="12" lg="3">
											<h5 className="mb-3 text-uppercase">List Style</h5>
											<ListGroup flush>
												<ListGroupItem
													tag="a"
													href=""
													className="border-0 pl-0 text-dark pt-0"
												>
													<i className="fa fa-check text-success mr-2" />
													Cras justo odio
                        </ListGroupItem>
												<ListGroupItem
													tag="a"
													href=""
													className="border-0 pl-0 text-dark pt-0"
												>
													<i className="fa fa-check text-success mr-2" />
													Dapibus ac facilisis in
                        </ListGroupItem>
												<ListGroupItem
													tag="a"
													href=""
													className="border-0 pl-0 text-dark pt-0"
												>
													<i className="fa fa-check text-success mr-2" />
													Morbi leo risus
                        </ListGroupItem>
												<ListGroupItem
													tag="a"
													href=""
													className="border-0 pl-0 text-dark pt-0"
												>
													<i className="fa fa-check text-success mr-2" />
													Porta ac consectetur ac
                        </ListGroupItem>
												<ListGroupItem
													tag="a"
													href=""
													className="border-0 pl-0 text-dark pt-0"
												>
													<i className="fa fa-check text-success mr-2" />
													Vestibulum at eros
                        </ListGroupItem>
											</ListGroup>
										</Col>
									</Row>
								</DropdownMenu>
							</UncontrolledDropdown>
							{/*--------------------------------------------------------------------------------*/}
							{/* End Mega Menu Dropdown                                                         */}
							{/*--------------------------------------------------------------------------------*/}
						</Nav>
					</Collapse>
				</Navbar>
			</header>
		);
	}
}
export default connect(mapStateToProps)(Header);
