var pug = require('gulp-pug');

module.exports = function(gulp, callback) {
	return gulp.src(pugSrc, { cwd: config.source.template + '/pages/' })
		.pipe(pug({
			pretty: true,
			data: {
                // debug: false,
                useLayout: myLayout, // Predefined layout name i.e vertical-light-sidebar
                useDirection: myTextDirection,
                rtl: rtl,
				app_assets_path : config.app_assets_path,
				assets_path : config.assets_path
            }
		}))
		.pipe(gulp.dest(config.html + '/' + myTextDirection + '/' + myLayoutName));
};