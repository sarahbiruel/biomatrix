// Gruntfile.js

module.exports = function (grunt) {

    // load all grunt tasks matching the ['grunt-*', '@*/grunt-*'] patterns
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

    // Task configuration.

	sass: {
		biomatrix: {
			files: {
					'css/biomatrix.css': 'css/src/biomatrix.scss'
				}
		},

		options: {
			 style:'expanded'
			}

	},

	cssmin: {
		minify: {
			expand: true,
			cwd: 'css/',
			src: 'biomatrix.css',
			dest: 'css/',
			ext: '.min.css'
		}
	},

	watch: {
		prosilk: {
			files: 'css/**/*.scss',
			tasks: ['sass','cssmin']
		},
	}

    });

     grunt.registerTask('default', ['cssmin', 'sass', 'watch']);

};
