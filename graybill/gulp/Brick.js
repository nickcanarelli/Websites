import chalk from "chalk";

class Brick {
    constructor() {}

    log(data) {
        return console.log(data);
    }

    error(obj) {
        this.log(chalk.bgRedBright(obj.title))
        this.log(chalk.redBright(obj.message))
    }

    debug(message) {
        this.log(chalk.bgMagentaBright('Debug Information:'));
        this.log(chalk.magentaBright(message));
    }
}

export default new Brick();