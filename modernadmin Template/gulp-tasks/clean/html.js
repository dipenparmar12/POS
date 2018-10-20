var clean = require('gulp-clean');

module.exports = function(gulp, callback) {
	return gulp.src(config.html + '/' + myTextDirection + '/' + myLayoutName + '/**/*.html', {
			read: false
		})
		.pipe(clean());
};