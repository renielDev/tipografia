module.exports = function(grunt) {
  grunt.initConfig({
      concat: {
        option: {
          'separator' : 'rn'
        },
        dist: {
          src: ['resources/assets/js/lib/**/*.js', 'resources/assets/js/app.js'],
          dest: 'resources/assets/js/entry.js'
        }
      },
      watch: {
        files: ['resources/assets/js/**/*.js'],
        tasks: ['concat']
      }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    // grunt.loadNpmTasks('grunt-webpack');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat']);
}
