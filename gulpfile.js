let gulp = require('gulp'),
    sass = require('gulp-sass'),
    header = require('gulp-header'),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();


// Copy third party libraries from /node_modules into /vendor
gulp.task('vendor', function () {

    // Bootstrap
    gulp.src([
        './node_modules/bootstrap/dist/**/*',
        '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
        '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
        .pipe(gulp.dest('./public/vendor/bootstrap'));

    // Font Awesome
    gulp.src([
        './node_modules/font-awesome/**/*',
        '!./node_modules/font-awesome/{less,less/*}',
        '!./node_modules/font-awesome/{scss,scss/*}',
        '!./node_modules/font-awesome/.*',
        '!./node_modules/font-awesome/*.{txt,json,md}'
    ])
        .pipe(gulp.dest('./public/vendor/font-awesome'));

    // jQuery
    gulp.src([
        './node_modules/jquery/dist/*',
        '!./node_modules/jquery/dist/core.js'
    ])
        .pipe(gulp.dest('./public/vendor/jquery'));
});

// Compile SCSS
gulp.task('css:compile', function () {
    return gulp.src('./resources/assets/scss/**/*.scss')
        .pipe(sass.sync({
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(gulp.dest('./public/css'))
});

// Minify CSS
gulp.task('css:minify', ['css:compile'], function () {
    return gulp.src([
        './public/css/*.css',
        '!./public/css/*.min.css'
    ])
        .pipe(cleanCSS())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./public/css'))
        .pipe(browserSync.stream());
});

// CSS
gulp.task('css', ['css:compile', 'css:minify']);


//copy js files
gulp.task('js:copy', function () {
    gulp.src('./resources/assets/js/**/*.js').pipe(gulp.dest('./public/js'));
});

// Minify JavaScript
gulp.task('js:minify', function () {
    return gulp.src([
        './public/js/*.js',
        '!./public/js/*.min.js'
    ])
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./public/js'))
        .pipe(browserSync.stream());
});


// JS
gulp.task('js', ['js:copy', 'js:minify']);

// Default task
gulp.task('default', ['css', 'js', 'vendor']);

// Configure the browserSync task
gulp.task('browserSync', function () {
    browserSync.init({
        proxy: 'app.dev',
        notify: false
    });
});

// Dev task
gulp.task('dev', ['css', 'js', 'browserSync'], function () {
    gulp.watch('./resources/assets/scss/*.scss', ['css']);
    gulp.watch('./resources/assets/js/*.js', ['js:copy', 'js:minify']);
    gulp.watch('./resources/views/**/*.php', browserSync.reload);
});


