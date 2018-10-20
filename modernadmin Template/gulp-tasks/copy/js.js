var gulpCopy = require('gulp-copy');

module.exports = function(gulp, callback) {
	return gulp.src(config.source.js+'/**/*.js')
		.pipe(gulp.dest(config.destination.js));
};