import React from 'react';
import ReactDOM from 'react-dom';
import * as serviceWorker from './serviceWorker';
import convert from 'xml-js';
import App from './App';

fetch('/vrp/vrpexport/vrpexport_xprop.xml')
    .then(response => response.text())
    .then(xml => {
        xml = convert.xml2json(xml, { compact: true, spaces: 0 });
        xml = JSON.parse(xml).data.xprop;
        let properties = {};
        xml.forEach(property => {
            properties[property.propid['_text']] = property;
        });
        ReactDOM.render(<App properties={properties} />, document.getElementById('root'));
    });

serviceWorker.unregister();