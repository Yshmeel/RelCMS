const path = require('path');

const PATHS = {
    source: path.join(__dirname, 'engine/vue'),
    build: path.join(__dirname, 'web')
};

module.exports = {
    output: {
        path: PATHS.build,
        filename: 'vue_compile.js'
    }
};