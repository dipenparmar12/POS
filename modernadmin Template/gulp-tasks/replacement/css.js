var replace = require('gulp-replace');

module.exports = function(gulp, callback) {
	return gulp.src('*.html', { cwd: config.html + '/' + myTextDirection + '/' + myLayoutName })
		.pipe(replace(/(<link\b.+href=")(?!http)(.+\bapp-assets\b.[^vendors].+[^min])(\.css)(".*>)/g, '$1$2.min$3$4'))
		.pipe(gulp.dest(config.html + '/' + myTextDirection + '/' + myLayoutName));
};