var rename = require("gulp-rename");

module.exports = function(gulp, callback) {
	return gulp.src('src/**/*.css')
		.pipe(cssmin())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest('dist'));
};