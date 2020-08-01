const autoprefixer = require("autoprefixer");

const CONFIG = {
    "settings": {
        "sass": {
            "compiler": "node-sass"
        }
    },
    "files": [
        
        {
            "id": "theme",
            "styles": [
                "assets/styles/sass/theme.scss",
            ],
            "js": [
                "assets/js/main.js"
            ],
            "fonts": [
                "assets/fonts/icomoon/fonts/*",
            ],
            "images": [
                "assets/images/**/*"
            ]
        },

        {
            "id": "vendor",
            "styles": [
                "assets/styles/sass/vendor.scss",
            ],
            "js": [
                "assets/vendor/slick/slick.min.js",
                "assets/vendor/fancybox/dist/jquery.fancybox.min.js"
            ],
            "fonts": [
                "assets/vendor/slick/fonts/*",
            ],
            "images": [
                "assets/vendor/slick/*.gif"
            ]
        }
    ],
    "plugins": {
        "default": {
            "sass": {
                "errLogToConsole": true
            },
            "postcss": [
                autoprefixer({
                    browsers: ["last 3 versions"]
                })
            ],
            "cleanCSS": {
            },
            "csslint": {

            },
            "ugilify": {
                "mangle": false,
                "compress": false
            }
        },
        "development": {
            "sass": {
                "errLogToConsole": true
            },
            "postcss": [
                autoprefixer({
                    browsers: ["last 3 versions"]
                })
            ],
            "cleanCSS": {
            },
            "csslint": {

            },
            "ugilify": {
                "mangle": false,
                "compress": false
            }
        },
        "production": {
            "sass": {
                "errLogToConsole": false
            },
            "postcss": [
                autoprefixer({
                    browsers: ["last 3 versions"]
                })
            ],
            "cleanCSS": {
            },
            "csslint": {

            },
            "ugilify": {
                "mangle": true,
                "compress": true
            }
        }
    },
    "dest": "./assets/dist"
};

exports.CONFIG = CONFIG;