var clean = require('gulp-clean');

module.exports = function(gulp, callback) {
	return gulp.src(config.starter_kit + '/' + myTextDirection + '/' + myLayoutName + '/**/*.html', {
			read: false
		})
		.pipe(clean());
};