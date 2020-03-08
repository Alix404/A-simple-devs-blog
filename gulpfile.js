'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var path = {
    scss: './stylesheets/SCSS/**/',
    css: './stylesheets/CSS/'
}


sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src(path.scss + '*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(path.css));
});

gulp.task('sass:watch', function () {
    gulp.watch(path.scss + '*.scss', gulp.parallel('sass'));
});