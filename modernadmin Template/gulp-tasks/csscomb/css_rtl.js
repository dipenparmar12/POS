var csscomb = require('gulp-csscomb');

module.exports = function(gulp, callback) {
	return gulp.src( ['**/*.css', '!**/*.min.css'], { cwd: config.destination.css_rtl } )
		.pipe(csscomb())
		.pipe(gulp.dest(config.destination.css_rtl));
};