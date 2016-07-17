/*
 * Node application
 * Autor: Ridwan Shariffdeen <ridwan.11@cse.mrt.ac.lk>
 *
 */

var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var cronTab = require('node-crontab');


/* Load Controllers */
var routes = require('./controller/index');

var app = express();



//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));

app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', routes);

app.use('/scripts/chai', express.static(__dirname + '/node_modules/chai/'));
app.use('/scripts/sinon-chai', express.static(__dirname + '/node_modules/sinon-chai/lib/'));
app.use('/scripts/sinon', express.static(__dirname + '/node_modules/sinon/pkg/'));
app.use('/scripts/grunt-blanket-mocha', express.static(__dirname + '/node_modules/grunt-blanket-mocha/'));


// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});

// error handlers

// development error handler
// will print stacktrace
if (app.get('env') === 'development') {
  app.use(function(err, req, res, next) {
    res.status(err.status || 500);
    res.render('error', {
      message: err.message,
      error: err
    });
  });
}

// production error handler
// no stacktraces leaked to user
app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.render('error', {
    message: err.message,
    error: {}
  });
});


module.exports = app;
