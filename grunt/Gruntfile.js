module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('api-definition.json'),
    api_benchmark: {
      myApi: {
        options: {
          output: 'generated'
        },
        files: {
          'report.html': 'api-definition.json',
          'export.json': 'api-definition.json'
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-api-benchmark');
  grunt.registerTask('benchmark', ['api_benchmark']);
};