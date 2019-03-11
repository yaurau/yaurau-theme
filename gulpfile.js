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
    '.node_modules/normalize.css/normalize.css',
    './css/**/*.css'
];

function styles() {
    return gulp.src(cssFiles)
        .pipe(concat('yaurau_theme.css'))
        .pipe(autoprefixer({
            browsers:[' >0.1% '],
            cascade: false
        }))
        .pipe(gulp.dest('./css'));
}

function script() {
    return gulp.src(jsFiles)
        .pipe(concat('yaurau_theme.js'))
        .pipe(gulp.dest('./js'));

}

function watch() {
    gulp.watch('./src/css/**/*.css');
    gulp.watch('./src/js/**/*.js');
}

gulp.task('styles', styles);
gulp.task('script', script);
gulp.task('watch', watch);
