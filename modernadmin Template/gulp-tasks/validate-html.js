var w3cjs = require('gulp-w3cjs');

module.exports = function(gulp, callback) {
	return gulp.src('./html/**/*.html')
		.pipe(w3cjs())
		.pipe(w3cjs.reporter());
};