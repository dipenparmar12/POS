// Require the modules.
var gulp             = require('gulp');
var gutil            = require('gulp-util');
var gulpSequence     = require('gulp-sequence');
var gulpRequireTasks = require('gulp-require-tasks');
var minimist         = require('minimist');
var config           = require('./config.json');

var options          = minimist(process.argv.slice(2));

// Global Variables
global.myLayout        = options.Layout;
global.myLayoutName    = options.LayoutName;
global.config          = config;
global.pugSrc         = ['*.pug', '!**/template.pug'];
global.dashboardRename = '';
global.rtl             = '';

if (options.TextDirection !== undefined){
	global.myTextDirection = options.TextDirection.toLowerCase();
	if (myTextDirection == 'rtl')
		rtl = '-rtl';
}
else{
	global.myTextDirection = '';
}

gutil.log(gutil.colors.green('Starting Gulp!!'));

// Exclude template specific files
if (myLayout == 'vertical-menu-template') {
	dashboardRename = config.vertical_menu_template.dashboardRename;
	pugSrc         = config.vertical_menu_template.pugSrc;
} else if (myLayout == 'vertical-compact-menu-template') {
	dashboardRename = config.vertical_compact_menu_template.dashboardRename;
	pugSrc         = config.vertical_compact_menu_template.pugSrc;
} else if (myLayout == 'vertical-content-menu-template') {
	dashboardRename = config.vertical_content_menu_template.dashboardRename;
	pugSrc         = config.vertical_content_menu_template.pugSrc;
} else if (myLayout == 'vertical-overlay-menu-template') {
	dashboardRename = config.vertical_overlay_menu_template.dashboardRename;
	pugSrc         = config.vertical_overlay_menu_template.pugSrc;
} else if (myLayout == 'vertical-modern-menu-template') {
	dashboardRename = config.vertical_modern_menu_template.dashboardRename;
	pugSrc         = config.vertical_modern_menu_template.pugSrc;
} else if (myLayout == 'horizontal-menu-template') {
	dashboardRename = config.horizontal_menu_template.dashboardRename;
	pugSrc         = config.horizontal_menu_template.pugSrc;
} else if (myLayout == 'horizontal-menu-template-nav') {
	dashboardRename = config.horizontal_menu_template_nav.dashboardRename;
	pugSrc         = config.horizontal_menu_template_nav.pugSrc;
}

// Invoke the module with options.
gulpRequireTasks({

	// Specify path to your tasks directory.
	path: process.cwd() + '/gulp-tasks' // This is default!

	// Additionally pass any options to it from the table below.
	// ...
	// path	- './gulp-tasks'	Path to directory from which to load your tasks modules
	// separator -	:	Task name separator, your tasks would be named, e.g. foo:bar:baz for ./tasks/foo/bar/baz.js
	// arguments -	[]	Additional arguments to pass to your task function
	// passGulp	- true	Whether to pass Gulp instance as a first argument to your task function
	// passCallback -	true	Whether to pass task callback function as a last argument to your task function
	// gulp	- require('gulp')	You could pass your existing Gulp instance if you have one, or it will be required automatically

});

// Clean Task.
gulp.task('dist-clean', ['clean:css', 'clean:js']);

// HTML Dist Task.
gulp.task('dist-html', gulpSequence('clean:html','file-write', 'pug:html', 'pug:rename', 'notify:html'));

// Monitor changes for both pug and sass files.
gulp.task('monitor', gulpSequence('file-write', ['pug:watch', 'sass:watch']));

// JS Distribution Task.
gulp.task('dist-js', gulpSequence('clean:js', 'copy:js', 'uglify:min', 'notify:js'));

// SASS Compile Task.
gulp.task('sass-compile', ['sass:main', 'sass:core', 'sass:pages', 'sass:plugins', 'sass:style']);

gulp.task('sass-compile-rtl', ['sass:rtl']);

// CSS Distribution Task.
gulp.task('dist-css', gulpSequence('clean:css', 'sass-compile', 'autoprefixer:css', 'csscomb:css', 'cssmin:css', 'notify:css'));

// RTL CSS Distribution Task.
gulp.task('dist-css-rtl', gulpSequence('clean:css_rtl', 'sass-compile', 'sass-compile-rtl', 'rtlcss', 'autoprefixer:css_rtl', 'csscomb:css_rtl', 'cssmin:css_rtl', 'notify:css'));

// Full Distribution Task.
gulp.task('dist', ['dist-css', 'dist-js']);

// Default Task.
gulp.task('default', ['dist']);


// Starter Kit
gulp.task('dist-sk-html', gulpSequence('clean:sk_html', 'sk-file-write', 'pug:sk_html', 'notify:html'));

// Documentation
gulp.task('dist-documentation', gulpSequence('clean:documentation', 'pug:documentation', 'notify:html'));

gulp.task('dist-phpdoc', gulpSequence('phpdoc:clean', 'phpdoc:change_ext', 'phpdoc:replace', 'phpdoc:rename'));

gulp.task('replacement', gulpSequence('replacement:css', 'replacement:js'));