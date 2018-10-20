module.exports = function(gulp, callback) {
	return gulp.watch([config.source.sass+'/**/*.scss',config.assets+'/scss/**/*.scss'], ['sass-compile']);
};