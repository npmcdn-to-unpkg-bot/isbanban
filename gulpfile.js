var
gulp         = require('gulp'),
less         = require('gulp-less'),
autoprefixer = require('gulp-autoprefixer'),
minifycss    = require('gulp-minify-css'),
uglify       = require('gulp-uglify'),
rename       = require('gulp-rename'),
concat       = require('gulp-concat'),
notify       = require('gulp-notify'),
path         = require('path');


// Styles
gulp.task('css', function() {
  return gulp.src('template/assets/css/site/*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]}))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('template/assets/css/site/'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest('template/assets/css/site/'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('css-backend', function() {
  return gulp.src('template/assets/bracket/less/style.default.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]}))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest('template/assets/bracket/css/'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest('template/assets/bracket/css/'))
    .pipe(notify({ message: 'Styles task complete' }));
});


gulp.task('watch-css', function() {
    gulp.watch('template/assets/css/site/*.less', ['css']);
});

gulp.task('watch-backend', function() {
    gulp.watch('template/assets/bracket/less/*.less', ['css-backend']);
});