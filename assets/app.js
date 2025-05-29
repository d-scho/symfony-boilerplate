/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

import _ from 'lodash';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

console.log(`Third-party lib imported. ${_.upperCase('This is upperCase() from lodash')}.`);