const { src, dest, watch } = require('gulp');

const sass = require('gulp-sass')(require('sass'));
const minify = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');

const path = {
	src: {
		js: './assets/src/js/**/*.js',
		css: './assets/src/css/**/*.scss'
	},
	dest: {
		js: './assets/js',
		css: './assets/css'
	}
}

const compile = () => {
	return src(path.src.css)
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(minify())
		.pipe(dest(path.dest.css));
}

const observe = () => {
	watch(path.src.css, compile);
}

exports.sass = compile;
exports.watch = observe;
