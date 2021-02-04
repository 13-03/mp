var gulp       = require('gulp'),
    gutil      = require('gulp-util'),
    rename     = require('gulp-rename'),
    browserSync= require('browser-sync').create(),
    autoprefix = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    concat     = require('gulp-concat'),
    sass       = require('gulp-sass')
;
var watch = {
    js : 'public/resources/js/*.js',
    sass   : 'public/resources/sass/**/*.scss',
    php    : '**/*.php'
};

var src  = {
    js : 'public/resources/js/*.js',
    sass   : 'public/resources/sass/app.scss',
    php    : '**/*.php'
};

var compiled = {
    js : 'public/static/',
    sass   : 'public/static/'
};
var distribution = {
    js  : './distribution/src/',
    css : './distribution/src/',
    php : './distribution/'
}
function browser_sync(done){
    browserSync.init({
        proxy:"localhost/vintage/index.php/",
        port: 80
    });
    done();
}

gulp.task('sass', function(done){
    gulp.src(src.sass)
        .pipe( sourcemaps.init() )
        .pipe(
            sass({
                errorLogToConsole : true,
                outputStyle   : 'compressed'
            })
        )
        .on('error', console.error.bind( console ) )
        .pipe(
            autoprefix({
                browsers: ['last 2 versions'],
                cascade: false
            })
        )
        .pipe( rename( {suffix:'.min'} ) )
        .pipe( sourcemaps.write('./') )
        .pipe( gulp.dest( compiled.sass) )
        .pipe( browserSync.stream());
    done();
})


gulp.task('js', function(done) {
    gulp.src(src.js)
        .pipe(sourcemaps.init())
        .pipe(concat('app.js'))
        .pipe( gulp.dest(compiled.js) )
        .pipe( browserSync.stream() );
    done();
});
function watch_files(){
    gulp.watch(watch.sass   ,gulp.series('sass'));
    gulp.watch(watch.js     ,gulp.series('js'));
}
gulp.task("start", gulp.parallel(watch_files, browser_sync));