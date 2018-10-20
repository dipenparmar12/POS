var sass = require('gulp-sass');

module.exports = function(gulp, callback) {
	return gulp.src(['app.scss', 'bootstrap.scss', 'bootstrap-extended.scss', 'colors.scss', 'vendors.scss', 'components.scss'], { cwd: config.source.sass})
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest(config.destination.css));
};