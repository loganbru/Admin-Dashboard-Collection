import React from 'react';
import indexRoutes from './routes/';
import { Router, Route, Switch } from "react-router-dom";
import { Provider } from "react-redux";
import { configureStore } from "./redux/store";
import { history } from './jwt/_helpers';
import { PrivateRoute } from './routes/PrivateRoutes';
import Blanklayout from './layouts/blanklayout';

class App extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            currentUser: null
        };
    }

    
    render() {

        return (

            <Provider store={configureStore()}>
                <Router basename="/" history={history}>
                    <Switch>
                        <Route path="/authentication/login" component={Blanklayout} />;
                        {indexRoutes.map((prop, key) => {
                            return <PrivateRoute path={prop.path} key={key} component={prop.component} />;
                        })
                      }
                    </Switch>
                </Router>
            </Provider>
        )    
    }
}

export default App;