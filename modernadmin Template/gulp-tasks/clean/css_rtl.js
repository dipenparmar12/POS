var clean = require('gulp-clean');

module.exports = function(gulp, callback) {
	return gulp.src(config.destination.css_rtl, {
			read: false
		})
		.pipe(clean());
};