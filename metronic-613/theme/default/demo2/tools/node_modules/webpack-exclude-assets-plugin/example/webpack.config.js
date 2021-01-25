const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ExcludeAssetsPlugin = require("../");

module.exports = {
  entry: {
    app: path.resolve(__dirname, 'js/app.js'),
    "css/app": path.resolve(__dirname, 'css/app.css')
  },
  output: {
    path: path.join(__dirname, 'dist'),
    filename: 'js/[name].js'
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css"
    }),
    new ExcludeAssetsPlugin({
      path: '^js\/css\/.*\.js$'
    })
  ],
  module: {
    rules: [
      {
        test: /\.css$/,
        exclude: /node_modules/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
        ]
      }
    ]
  },
  resolve: {
    extensions: ['.css']
  }
};
