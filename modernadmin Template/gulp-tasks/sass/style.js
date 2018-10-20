var sass = require('gulp-sass');

module.exports = function(gulp, callback) {
	return gulp.src(config.assets+'/scss/style.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest(config.assets + '/css/'));
};