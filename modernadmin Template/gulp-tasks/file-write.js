var fs = require('fs');

module.exports = function(gulp, callback) {
	return fs.writeFile(config.source.template + '/pages/template.pug', 'extends ../templates/' + myLayout, callback);
};