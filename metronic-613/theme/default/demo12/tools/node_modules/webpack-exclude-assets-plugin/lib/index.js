const weblog = require('webpack-log');
const log = weblog({ name: 'webpack > ExcludeAssetsPlugin', id: 'webpack-command' });

/**
* @class ExcludeAssetsPlugin
* @param {Object} options
* @property {String | Array<String|RegExp>} options.path
*/

class ExcludeAssetsPlugin {

  constructor(options = {}) {
    this.path = options.path || [];
  }

  apply(compiler) {


    compiler.hooks.emit.tapAsync("ExcludeAssetsPlugin", (compilation, callback) => {
      if (!this.path || this.path.length === 0) {
        log.error("<path> property is required!");
        process.exitCode = 1;
      }
      try {
        Object.keys(compilation.assets)
          .filter(asset => {
            const assetPaths = [this.path].reduce((a, v) => a.concat(v), []);
            const assetPathPattern = new RegExp(assetPaths.join('|'));
            const isAllowedAsset = assetPathPattern.test(asset);
            return isAllowedAsset && asset;
          })
          .forEach(asset => {
            delete compilation.assets[asset];
          });
        callback();
      } catch (error) {
        log.error(error.message);
      }


    });
  }
}

module.exports = ExcludeAssetsPlugin;
