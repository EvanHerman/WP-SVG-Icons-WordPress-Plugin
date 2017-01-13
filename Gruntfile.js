'use strict';
module.exports = function(grunt) {

	var pkg = grunt.file.readJSON( 'package.json' );

  grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

    // Autoprefixer for our CSS files
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer-core') ({
            browsers: ['last 2 versions']
          })
        ]
      },
      dist: {
        src: [
					'admin/css/wordpress-svg-icon-plugin-style.css',
					'admin/css/wp-svg-icons-admin.css',
					'admin/css/default-icon-styles.css',
				]
      }
    },

    // css minify all contents of our directory and add .min.css extension
    cssmin: {
      target: {
        files: [
          {
						'admin/min/wordpress-svg-icon-plugin-style.min.css':
						[
							'admin/css/wordpress-svg-icon-plugin-style.css',
						],
          },
					{
						'admin/css/wp-svg-icons-admin.min.css':
						[
							'admin/css/wp-svg-icons-admin.css',
						],
					},
					{
						'admin/css/default-icon-styles.min.css':
						[
							'admin/css/default-icon-styles.css',
						],
					}
        ]
      }
    },

		// Copy our template files to the root /template/ directory.
    copy: {
			package: {
				files: [
					// copy over the files in preperation for a deploy to SVN
					{
						expand: true,
						src: [
							'admin/**',
							'includes/**',
							'languages/**',
							'public/**',
							'license.php',
							'readme.txt',
							'wp-svg-icons.php',
						],
						dest: 'build/'
					},
				],
			},
    },

    // watch our project for changes
    watch: {
      admin_css: { // admin css
        files: 'admin/css/*.css',
        tasks: [ 'cssmin' ],
        options: {
          spawn: false,
          event: ['all']
        },
      },
    },

		replace: {
			base_file: {
				src: [ 'wp-svg-icons.php' ],
				overwrite: true,
				replacements: [{
					from: /Version:           (.*)/,
					to: "Version:           <%= pkg.version %>"
				}]
			},
			readme_txt: {
				src: [ 'readme.txt' ],
				overwrite: true,
				replacements: [{
					from: /Stable tag: (.*)/,
					to: "Stable tag: <%= pkg.version %>"
				}]
			},
			readme_md: {
				src: [ 'README.md' ],
				overwrite: true,
				replacements: [
					{
						from: /#### WP SVG Icons (.*) Free/,
						to: "#### WP SVG Icons <%= pkg.version %> Free"
					}
				]
			},
			constants: {
				src: [ 'wp-svg-icons-custom-page.php' ],
				overwrite: true,
				replacements: [{
					from: /new WP_SVG_Icons_Admin( 'wp-svg-icons' , '(.*)' );/,
					to: "new WP_SVG_Icons_Admin( 'wp-svg-icons' , '<%= pkg.version %>' );"
				}]
			}
		},

		wp_deploy: {
			deploy: {
				options: {
					plugin_slug: 'svg-vector-icon-plugin',
					build_dir: 'build/',
					deploy_trunk: true,
					deploy_tag: pkg.version,
					max_buffer: 1024*1024*2,
					plugin_main_file: 'wp-svg-icons.php',
				},
			}
		}

  });

  // load tasks
	grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-contrib-copy' );
	grunt.loadNpmTasks( 'grunt-postcss' );
	grunt.loadNpmTasks( 'grunt-text-replace' );
	grunt.loadNpmTasks( 'grunt-wp-deploy' );

	// register task
	grunt.registerTask( 'default', [
		'cssmin',
		'watch',
	]);

	// register bump-version
	grunt.registerTask( 'bump-version', [
		'replace',
	] );

	// package release
	grunt.registerTask( 'package-release', [
		'bump-version',
		'copy:package',
		'copy:release_package',
	] );

	// register deploy
	grunt.registerTask( 'deploy', [
		'copy',
		'wp_deploy'
	] );

};
