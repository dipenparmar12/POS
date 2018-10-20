var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

module.exports = function(gulp, callback) {
    return gulp.src(['**/*.css', '!**/*.min.css'], { cwd: config.destination.css_rtl })
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(config.destination.css_rtl));
};