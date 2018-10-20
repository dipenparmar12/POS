var uglify = require('gulp-uglify');
var rename = require("gulp-rename");

module.exports = function(gulp, callback) {
	return gulp.src( ['**/*.js', '!**/*.min.js', '!**/sweet-alerts.js'], {cwd: config.destination.js} )
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(config.destination.js));
};