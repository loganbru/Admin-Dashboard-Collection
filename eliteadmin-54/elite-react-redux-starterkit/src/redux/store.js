import { createStore, applyMiddleware } from 'redux';
import { createLogger } from 'redux-logger';
import reducers from './reducers';

const logger = createLogger();

export function configureStore(initialState) {

    const middlewares = [logger];

    const store = createStore(
        reducers,
        initialState,
        applyMiddleware(...middlewares)
    );

    return store;
}
