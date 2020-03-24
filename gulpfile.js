'use strict';
var browserSync = require('browser-sync').create();
var gulp = require('gulp');
var sass = require('gulp-sass');
var path = {
    scss: 'stylesheets/SCSS/**/*.scss',
    css: 'public/CSS'
};


sass.compiler = require('node-sass');

function style() {
    return gulp.src(path.scss)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(path.css))
        .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        server: {
            baseDir: "./public",
            index: "/home.html"
        }
    });
    gulp.watch(path.scss, style);
    gulp.watch('./**/*.html').on('change', browserSync.reload);
    gulp.watch('./**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;

