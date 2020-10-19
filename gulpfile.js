var syntax = 'sass', // Syntax: sass or scss;
    temspl  = 'ashshop',
    path = 'public_html/catalog/view/theme/'+ temspl,
    pathcss = 'public_html/catalog/view/theme/'+ temspl +'/stylesheet',
    site = 'ocstarter.loc',
    type = '.twig',
    gulpVersion = 4; // Gulp version: 3 or 4
gmWatch = false; // ON/OFF GraphicsMagick watching "image/_src" folder (true/false). Linux install gm: sudo apt update; sudo apt install graphicsmagick

var gulp = require('gulp')
sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    cleancss = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    rsync = require('gulp-rsync'),
    imageResize = require('gulp-image-resize'),
    imagemin = require('gulp-imagemin'),
    bourbon        = require('bourbon'),
    del = require('del');

// Local Server
gulp.task('browser-sync', function () {
  browserSync({
    proxy: site,
    notify: false,
    // open: false,
    // online: false, // Work Offline Without Internet Connection
    // tunnel: true, tunnel: "projectname", // Demonstration page: http://projectname.localtunnel.me
  })
});

// Sass|Scss Styles
gulp.task('styles', function () {
  return gulp.src(path + '/' + syntax + '/**/*.' + syntax + '')
      .pipe(sass({outputStyle: 'expanded'}).on("error", notify.onError()))
      // .pipe(rename({suffix: '.min', prefix: ''}))
      .pipe(autoprefixer(['last 15 versions']))
      .pipe(cleancss({level: {1: {specialComments: 0}}})) // Opt., comment out when debugging
      .pipe(gulp.dest(pathcss))
      .pipe(browserSync.stream())
});

// JS
gulp.task('scripts', function () {
  return gulp.src([
    // path + '/libs/jquery/dist/jquery.min.js',
    // path + '/libs/bootstrap/js/bootstrap.bundle.min.js',
    path + '/js/common.js', // Always at the end
  ])
      .pipe(concat('scripts.min.js'))
      // .pipe(uglify()) // Mifify js (opt.)
      .pipe(gulp.dest(path + '/js'))
      .pipe(browserSync.reload({stream: true}))
});

// Images @x1 & @x2 + Compression | Required graphicsmagick (sudo apt update; sudo apt install graphicsmagick)
gulp.task('image1x', function () {
  return gulp.src(path + '/image/_src/**/*.*')
      .pipe(imageResize({width: '50%'}))
      .pipe(imagemin())
      .pipe(gulp.dest(path + '/image/@1x/'))
});
gulp.task('image2x', function () {
  return gulp.src(path + '/image/_src/**/*.*')
      .pipe(imageResize({width: '100%'}))
      .pipe(imagemin())
      .pipe(gulp.dest(path + '/image/@2x/'))
});

// Clean @*x IMG's
gulp.task('cleanimage', function () {
  return del([path + '/image/@*'], {force: true})
});

// HTML Live Reload
gulp.task('code', function () {
  return gulp.src(path + '/**/*' + type)
      .pipe(browserSync.reload({stream: true}))
});


// If Gulp Version 3
if (gulpVersion == 3) {

  // Img Processing Task for Gulp 3
  gulp.task('image', ['image1x', 'image2x']);

  var taskArr = ['styles', 'scripts', 'browser-sync'];
  gmWatch && taskArr.unshift('image');

  gulp.task('watch', taskArr, function () {
    gulp.watch(path + '/' + syntax + '/**/*.' + syntax + '', ['styles']);
    gulp.watch(['libs/**/*.js', path + '/js/common.js'], ['scripts']);
    gulp.watch(path + '/**/*' + type, ['code']);
    gmWatch && gulp.watch('app/image/_src/**/*', ['image']);
  });
  gulp.task('default', ['watch']);

}
;

// If Gulp Version 4
if (gulpVersion == 4) {

  // Img Processing Task for Gulp 4
  gulp.task('image', gulp.parallel('image1x', 'image2x'));

  gulp.task('watch', function () {
    gulp.watch(path + '/' + syntax + '/**/*.' + syntax + '', gulp.parallel('styles'));
    gulp.watch(['libs/**/*.js', path + '/js/common.js'], gulp.parallel('scripts'));
    gulp.watch(path + '/**/*' + type, gulp.parallel('code'));
    gmWatch && gulp.watch(path + '/image/_src/**/*', gulp.parallel('image')); // GraphicsMagick watching image sources if allowed.
  });
  gmWatch ? gulp.task('default', gulp.parallel('image', 'styles', 'scripts', 'browser-sync', 'watch'))
      : gulp.task('default', gulp.parallel('styles', 'scripts', 'browser-sync', 'watch'));

};