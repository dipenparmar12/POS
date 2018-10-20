var rename = require("gulp-rename");

module.exports = function(gulp, callback) {
	// rename via string
	return gulp.src(dashboardRename, { cwd: config.html + '/' + myTextDirection + '/' + myLayoutName + '/' })
		.pipe(rename("index.html"))
		.pipe(gulp.dest(config.html + '/' + myTextDirection + '/' + myLayoutName + '/'));
};