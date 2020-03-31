'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var path = {
    scss: 'stylesheets/SCSS/**/*.scss',
    css: 'public/CSS'
};

sass.compiler = require('node-sass');

gulp.task('Stylization', function () {
    return gulp.src(path.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(path.css));
});
