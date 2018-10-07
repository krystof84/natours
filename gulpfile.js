var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCss = require('gulp-clean-css');


gulp.task('sass', function() {
  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 5 versions']
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css'))
});

gulp.task('watch', function () {
  gulp.watch('./assets/sass/**/*.scss', ['sass']);
});

gulp.task('mincss', function() {
  return gulp.src('./assets/css/main.css')
    .pipe(cleanCss())
    .pipe(gulp.dest('./assets/css/main.min.css'));
});

gulp.task('default', ['watch']);