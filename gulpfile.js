/*
 * *
 *  *  @author   Rauvtovich Yauhen
 *  *  @copyright Y.Rauvtovich 2019
 *  *  @license   GPL-2.0+
 *
 *
 */

const gulp = require('gulp');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');


const jsFiles = [
    './js/**/*.js'
];
const cssFiles = [
    './css/**/*.css'
];

function themeStyles() {
    return gulp.src(cssFiles)
        .pipe(concat('yaurau_theme.css'))
        .pipe(autoprefixer({
            browsers:[' >0.1% '],
            cascade: false
        }))
        .pipe(gulp.dest('./css'));
}


function styles() {
    return gulp.src('./style_theme.css')
        .pipe(concat('./style.css'))
        .pipe(autoprefixer({
            browsers:[' >0.1% '],
            cascade: false
        }))
        .pipe(gulp.dest('./'));
}

function script() {
    return gulp.src(jsFiles)
        .pipe(concat('yaurau_theme.js'))
        .pipe(gulp.dest('./js'));

}

gulp.task('themeStyles', themeStyles);
gulp.task('styles', styles);
gulp.task('script', script);

