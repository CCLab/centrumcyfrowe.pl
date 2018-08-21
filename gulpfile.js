'use strict';

var gulp = require('gulp'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer');


var config = {
    nodeModulesDir: './node_modules',
    srcDir: './src',
    distDir: './dist'
};

function swallowError (error) {
    console.log(error.toString());
    this.emit('end');
}

gulp.task('styles-app', function () {
    return gulp.src(config.srcDir + '/scss/app.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed', errLogToConsole: true}))
        .on('error', swallowError)
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(sourcemaps.write())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(config.distDir + '/css'))
});

gulp.task('styles-dependencies', function () {
    return gulp.src([
            // list of css dependencies
            config.nodeModulesDir + '/bootstrap/dist/css/bootstrap.min.css',
            config.nodeModulesDir + '/font-awesome/css/font-awesome.min.css',
            config.nodeModulesDir + '/hover.css/css/hover-min.css',
            config.nodeModulesDir + '/swiper/dist/css/swiper.min.css',
            config.nodeModulesDir + '/@fancyapps/fancybox/dist/jquery.fancybox.min.css',
        ])
        .pipe(cssnano())
        .pipe(concat('dependencies.min.css'))
        .pipe(gulp.dest(config.distDir + '/css'))
});

gulp.task('js-app', function () {
    return gulp.src([
            config.srcDir + '/js/app.js',
            config.srcDir + '/js/projects-filter.js',
            config.srcDir + '/js/articles-filter.js',
            config.srcDir + '/js/news-filter.js',
            config.srcDir + '/js/tags-filter.js',
        ])
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(uglify())
        .on('error', swallowError)
        .pipe(concat('app.min.js'))
        .pipe(gulp.dest(config.distDir + '/js'))
});

gulp.task('js-dependencies', function () {
    return gulp.src([
            // list of js dependencies
            config.nodeModulesDir + '/jquery/dist/jquery.min.js',
            config.nodeModulesDir + '/bootstrap/dist/js/bootstrap.min.js',
            config.nodeModulesDir + '/swiper/dist/js/swiper.min.js',
            config.nodeModulesDir + '/@fancyapps/fancybox/dist/jquery.fancybox.min.js',
            config.nodeModulesDir + '/prettySocial/jquery.prettySocial.min.js',
        ])

        .pipe(uglify())
        .pipe(concat('dependencies.min.js'))
        .pipe(gulp.dest(config.distDir + '/js'))
});

gulp.task('fonts', function() {
    return gulp.src(config.srcDir + '/fonts/**/*')
      .pipe(gulp.dest(config.distDir + '/fonts'))
});

gulp.task('fonts-fa', function() {
    return gulp.src(config.nodeModulesDir + '/font-awesome/fonts/**/*')
      .pipe(gulp.dest(config.distDir + '/fonts'))
});

gulp.task('images', function() {
    return gulp.src(config.srcDir + '/images/**/*')
      .pipe(gulp.dest(config.distDir + '/images'))
});

gulp.task('default', [
        'styles-app',
        'styles-dependencies',
        'js-app',
        'js-dependencies',
        'fonts',
        'fonts-fa',
        'images'
    ], function() {
        gulp.watch( config.srcDir + '/scss/**/*.scss', [ 'styles-app' ] );
        gulp.watch( config.srcDir + '/js/*.js', [ 'js-app' ] );
        gulp.watch( config.srcDir + '/fonts/*.**', [ 'fonts' ] );
        gulp.watch( config.srcDir + '/images/*.**', [ 'images' ] );
    });