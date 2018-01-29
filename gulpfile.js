const gulp = require('gulp'),
      csso = require('gulp-csso'),
      sass = require('gulp-sass'),
      del  = require('del');

// Delete all CSS files
gulp.task('css:clean', function() {
	return del('dist/css/*.css', { force: true });
});

// Compile CSS
gulp.task('css:compile', ['css:clean'], function() {
	return gulp.src('src/scss/*.scss')
			.pipe(sass())
			.pipe(csso())
			.pipe(gulp.dest('dist/css'));
});

// Delete all HTML files
gulp.task('html:clean', function() {
	return del('dist/**/*.html', { force: true });
});

// Copy all HTML files
gulp.task('html:copy', function() {
	return gulp.src('src/**/*.html')
		.pipe(gulp.dest('dist/'));
});

// Delete all static files such as images etc.
gulp.task('static:clean', function() {
	return del([
			'dist/**/*', // delete all files
			'!dist/**/*.html', // except html
			'!dist/**/*.css' // except css
	], { force: true });
});

gulp.task('static:copy', ['static:clean'], function() {
	return gulp.src('src/static/**/*')
			.pipe(gulp.dest('dist'));
});

//Delete all js files and copy new ones.
gulp.task('js:clean', function() {
	return del([
			'dist/js/*', // delete all files
			'!dist/**/*.html', // except html
			'!dist/**/*.css' // except css
	], { force: true });
});

gulp.task('js:copy', ['js:clean'], function() {
	return gulp.src('src/js/*')
			.pipe(gulp.dest('dist/js'));
});

gulp.task('build', ['css:compile', 'html:copy', 'static:copy', 'js:copy']);

gulp.task('develop', ['build'], function() {
	gulp.watch('src/scss/*', ['css:compile']); // watch for changes in SCSS
	gulp.watch('src/**/*.html', ['html:copy']); // watch for changes in HTML
	gulp.watch('src/static/**/*', ['static:copy']); // watch for changes in static files
	gulp.watch('src/js/*', ['js:copy']); // watch for changes in js files
});

