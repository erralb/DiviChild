const paths = {
                style_sass: './*.scss',
                style_css: './'
            };

const gulp          = require('gulp');
const sass          = require('gulp-sass');
const livereload    = require('gulp-livereload');
const browserSync   = require('browser-sync').create();
const reload        = browserSync.reload;

//Compile Sass
gulp.task('sass', function() {
    return gulp.src(paths.style_sass)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.style_css))
        .pipe(livereload());
});

//Watch and livereload
gulp.task('default',function() {
    livereload.listen();
    gulp.watch(paths.style_sass, gulp.series('sass'));
});