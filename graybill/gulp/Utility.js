import {
    stream
} from "gulp";
import gutil from "gulp-util";
import {
    CONFIG
} from "./config";

const env = gutil.env.env || "production";

class Utility {
    static getPluginConfig(name) {
        const defaults = CONFIG.plugins.default[name];
        const envConfig = CONFIG.plugins[env][name];

        return Object.assign({}, defaults, envConfig);
    }

    static OutputStringToFile(filename, string) {
        var src = stream.Readable({
            objectMode: true
        });

        src._read = function () {
            this.push(new gutil.File({
                cwd: "",
                base: "",
                path: filename,
                contents: new Buffer(string)
            }));

            this.push(null);
        };

        return src;
    }
}

export default Utility;