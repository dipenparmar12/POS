var rename = require("gulp-rename");

module.exports = function(gulp, callback) {
	// rename via string
	return gulp.src('index.php', { cwd: config.html + '/' + myTextDirection + '/' + myLayoutName + '/' + 'php/' })
		.pipe(rename("documentation-index.php"))
		.pipe(gulp.dest(config.html + '/' + myTextDirection + '/' + myLayoutName + '/' + 'php/'));
};