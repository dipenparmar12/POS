var sass = require('gulp-sass');

module.exports = function(gulp, callback) {
	return gulp.src(config.source.sass+'/plugins/**/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest(config.destination.css + '/plugins/'));
};