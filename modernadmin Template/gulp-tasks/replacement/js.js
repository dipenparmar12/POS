var replace = require('gulp-replace');

module.exports = function(gulp, callback) {
	return gulp.src('*.html', { cwd: config.html + '/' + myTextDirection + '/' + myLayoutName })
		.pipe(replace(/(<script\b.+src=")(?!http)(.+\bapp-assets\b.[^vendors].+[^min])(\.js)(".*>)/g, '$1$2.min$3$4'))
		.pipe(gulp.dest(config.html + '/' + myTextDirection + '/' + myLayoutName));
};