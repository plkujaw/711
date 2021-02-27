'use strict';
const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');

function gulpCompile(done) {
  src('assets/src/scss/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('assets/dist/css/'));
  src('assets/src/js/main.js')
    .pipe(dest('assets/dist/js/'));
  done();
}

function gulpWatch() {
  watch('assets/src/scss/**/*.scss', gulpCompile);
  watch('assets/src/js/*.js', gulpCompile);
}

exports.default = gulpWatch;
