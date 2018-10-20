var rtlcss = require('gulp-rtlcss');

module.exports = function(gulp, callback) {
	return gulp.src([config.destination.css + '/**/*.css', config.destination.css + '!/**/*.min.css'])
        .pipe(rtlcss())
        .pipe(gulp.dest(config.destination.css_rtl));
};