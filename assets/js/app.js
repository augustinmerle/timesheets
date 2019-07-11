/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import 'es6-promise/auto'
import 'babel-polyfill'
import '../css/app.scss';

import Vue from 'vue'
import Example from './components/Example'
// any CSS you require will output into a single css file (app.css in this case)

import VuesticNavbar from './components/VuesticNavbar'


var $ = require('jquery');
require('bootstrap');
require('../css/app.scss');
// require('../css/resources/_variables.scss');

//require('bootstrap-loader');
//require('bootstrap-saas');

//require('../css/vuestic-styles');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

new Vue({
    el: '#app',
    components: {Example, VuesticNavbar}
});

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
