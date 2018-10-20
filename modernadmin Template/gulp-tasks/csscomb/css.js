var csscomb = require('gulp-csscomb');

module.exports = function(gulp, callback) {
	return gulp.src( ['**/*.css', '!**/*.min.css'], { cwd: config.destination.css } )
		.pipe(csscomb())
		.pipe(gulp.dest(config.destination.css));
};