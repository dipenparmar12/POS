var ext_replace = require('gulp-ext-replace');

module.exports = function(gulp, callback) {
	// change extension from .html to .php
	return gulp.src('*.html', { cwd: config.html + '/' + myTextDirection + '/' + myLayoutName + '/' })
		.pipe(ext_replace('.php'))
		.pipe(gulp.dest(config.html + '/' + myTextDirection + '/' + myLayoutName + '/' + 'php' + '/'));
};