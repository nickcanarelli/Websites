const {
    src,
    dest,
    series,
    watch,
    stream
} = require("gulp");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const sass = require("gulp-sass");
const cleanCSS = require("gulp-clean-css");
const concat = require("gulp-concat");
const imagemin = require("gulp-imagemin");
import gutil from "gulp-util";
const env = gutil.env.env || "production";
const {
    CONFIG
} = require("./gulp/config");

require("@babel/polyfill");

import Utility from './gulp/Utility';
import Brick from './gulp/Brick';

const handleStyle = entry => {
    let stream = src(entry.styles)
        // .pipe(sourcemaps.init())
        .pipe(
            sass(Utility.getPluginConfig('sass'))
        )

    stream
        .pipe(concat(`${entry.id}.min.css`))
        .pipe(cleanCSS())
        .pipe(dest(CONFIG.dest));

    return stream;
};

function styles(cb) {
    for (let entry of CONFIG.files) {
        if (entry.styles) handleStyle(entry);
    }

    cb();
}

exports.styles = styles;
// Syles task end

// SCRIPTS TASK START
const handleScript = entry => {
    return src(entry.js)
        .pipe(babel())
        .pipe(concat({
            path: `${entry.id}.min.js`
        }))
        .pipe(uglify(Utility.getPluginConfig('uglify')))
        .on('error', function(err) {
            console.log(err.toString())

            this.emit('end');
        })
        // .pipe(sourcemaps.write("."))
        .pipe(dest(CONFIG.dest));
    // }
};

function scripts(cb) {
    for (let entry of CONFIG.files) {
        if (entry.js && entry.js.length) handleScript(entry);
    }

    cb();
}

exports.scripts = scripts;
// SCRIPTS TASK END

// WATCHER TASK START
function handleWatch(entry, task) {
    watch(entry, exports[task]);
}

function watchFiles(cb) {
    watch('./assets/js/**/*.js', scripts);
    watch('./assets/styles/**/*', styles);

    cb();
}

exports.watch = watchFiles;
// WATCHER TASK END

// FONTS TASK START
const handleFont = entry => {
    return src(entry.fonts)
        .pipe(dest(CONFIG.dest));
};

function fonts(cb) {
    for (let entry of CONFIG.files) {
        if (entry.fonts && entry.fonts.length) handleFont(entry);
    }

    cb();
}

exports.fonts = fonts;
// FONTS TASK END

// IMAGES TASK START
const handleImage = entry => {
    return src(entry.images)
        .pipe(imagemin())
        .pipe(dest(CONFIG.dest));
};

function images(cb) {
    for (let entry of CONFIG.files) {
        if (entry.images && entry.images.length) handleImage(entry);
    }

    cb();
}

exports.images = images;
// IMAGES TASK END



exports.default = series(styles, scripts, fonts, images);
// exports.watch = series(styles, scripts, watchFiles);
// exports.prod = series(styles, scripts, lintFiles, watchFiles);