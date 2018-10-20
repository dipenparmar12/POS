var fs = require('fs');

module.exports = function(gulp, callback) {
	return fs.writeFile(config.source.template + '/pages/starter-kit/template.pug', 'extends ../../templates/starter-kit/' + myLayout, callback);
};