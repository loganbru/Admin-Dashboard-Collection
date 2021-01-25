import React from 'react';
import { connect } from 'react-redux';
import PerfectScrollbar from 'react-perfect-scrollbar'
import { setLogoBg, setNavbarBg, setSidebarBg } from '../../../redux/settings/action';

const mapStateToProps = state => ({
    ...state
});
const mapDispatchToProps = dispatch => ({
    setLogoBg: (payload) => dispatch(setLogoBg(payload)),
    setNavbarBg: (payload) => dispatch(setNavbarBg(payload)),
    setSidebarBg: (payload) => dispatch(setSidebarBg(payload))    
});

class Customizer extends React.Component {
    constructor(props) {
        super(props);
        this.toggle = this.toggle.bind(this);
    }
    componentDidMount() {
        window.addEventListener("load", this.defaultSettings);
    }

    toggle() {
        document.getElementById("customizer").classList.toggle("show-service-panel");
    }
    render() {
        return (
            <aside className="customizer" id="customizer">
                {/*--------------------------------------------------------------------------------*/}
                {/* Toggle Customizer From Here                                                    */}
                {/*--------------------------------------------------------------------------------*/}
                <span className="service-panel-toggle text-white" onClick={this.toggle}><i className="fa fa-spin fa-cog"></i></span>
                <PerfectScrollbar>
                    <div className="customizer-body">
                    <div className="mt-3 border-bottom px-3">                       
                            {/*--------------------------------------------------------------------------------*/}
                            {/* Change LOGO Background                                                         */}
                            {/*--------------------------------------------------------------------------------*/}
                            <h5 className="font-medium m-0">Logo Backgrounds</h5>
                            <ul className="theme-color mt-2 mb-3">
                                <li className="theme-item"><span className="theme-link" data-logobg="skin1" onClick={() => { this.props.setLogoBg('skin1') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-logobg="skin2" onClick={() => { this.props.setLogoBg('skin2') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-logobg="skin3" onClick={() => { this.props.setLogoBg('skin3') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-logobg="skin4" onClick={() => { this.props.setLogoBg('skin4') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-logobg="skin5" onClick={() => { this.props.setLogoBg('skin5') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-logobg="skin6" onClick={() => { this.props.setLogoBg('skin6') }}>&nbsp;</span></li>
                            </ul>
                        </div>
                        <div className="mt-3 border-bottom px-3">
                            {/*--------------------------------------------------------------------------------*/}
                            {/* Change NAVBAR Background                                                       */}
                            {/*--------------------------------------------------------------------------------*/}
                            <h5 className="font-medium m-0">Navbar Backgrounds</h5>
                            <ul className="theme-color mt-2 mb-3">
                                <li className="theme-item"><span className="theme-link" data-navbarbg="skin1" onClick={() => { this.props.setNavbarBg('skin1') }}>&nbsp;&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-navbarbg="skin2" onClick={() => { this.props.setNavbarBg('skin2') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-navbarbg="skin3" onClick={() => { this.props.setNavbarBg('skin3') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-navbarbg="skin4" onClick={() => { this.props.setNavbarBg('skin4') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-navbarbg="skin5" onClick={() => { this.props.setNavbarBg('skin5') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-navbarbg="skin6" onClick={() => { this.props.setNavbarBg('skin6') }}>&nbsp;</span></li>
                            </ul>

                        </div>
                        <div className="mt-3 border-bottom px-3">
                            {/*--------------------------------------------------------------------------------*/}
                            {/* Change SIDEBAR Background                                                      */}
                            {/*--------------------------------------------------------------------------------*/}
                            <h5 className="font-medium m-0">Sidebar Backgrounds</h5>
                            <ul className="theme-color mt-2 mb-3">
                                <li className="theme-item"><span className="theme-link" data-sidebarbg="skin1" onClick={() => { this.props.setSidebarBg('skin1') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-sidebarbg="skin2" onClick={() => { this.props.setSidebarBg('skin2') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-sidebarbg="skin3" onClick={() => { this.props.setSidebarBg('skin3') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-sidebarbg="skin4" onClick={() => { this.props.setSidebarBg('skin4') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-sidebarbg="skin5" onClick={() => { this.props.setSidebarBg('skin5') }}>&nbsp;</span></li>
                                <li className="theme-item"><span className="theme-link" data-sidebarbg="skin6" onClick={() => { this.props.setSidebarBg('skin6') }}>&nbsp;</span></li>
                            </ul>

                        </div>
                    </div>
                </PerfectScrollbar>
            </aside >
        );
    }
}
export default connect(mapStateToProps, mapDispatchToProps)(Customizer);
