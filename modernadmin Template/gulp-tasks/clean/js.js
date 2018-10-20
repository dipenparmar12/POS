var clean = require('gulp-clean');

module.exports = function(gulp, callback) {
	return gulp.src(config.destination.js, {
			read: false
		})
		.pipe(clean());
};