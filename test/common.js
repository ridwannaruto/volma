/**
 *
 * Autor: Ridwan Shariffdeen <ridwan@orangehrmlive.com>
 *
 */



var chai = require('chai');
var chaiHttp = require('chai-http');
var app = require('../app');
var sinon = require('sinon');
var sinonChai = require('sinon-chai');

chai.use(chaiHttp);
chai.use(sinonChai);

exports.chai = chai;
exports.assert = chai.assert;
exports.app = app;
exports.sinon = sinon;