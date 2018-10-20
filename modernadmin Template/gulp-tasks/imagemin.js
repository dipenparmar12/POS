var imagemin = require('gulp-imagemin');

module.exports = function(gulp, callback) {
    return gulp.src('app-assets/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'));
};