import React from 'react';
import ReactDOM from 'react-dom';
import './assets/scss/style.scss';
// setup fake backend
import { configureFakeBackend } from './jwt/_helpers';
configureFakeBackend();

const App = require('./app').default;

ReactDOM.render( <
	App / > , document.getElementById('root')
);