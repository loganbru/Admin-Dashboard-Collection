[![NPM](https://nodei.co/npm/webpack-exclude-assets-plugin.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/webpack-exclude-assets-plugin/)

Webpack plugin to exclude assets from webpack output based on a path RegExp pattern.

## Why?

When we have css, scss, sss, stylus or some style file as an entry for example, using some plugin to extract chunck as a separeted file as [`mini-css-extract-plugin`](https://github.com/webpack-contrib/mini-css-extract-plugin) or [`extract-text-webpack-plugin`](https://github.com/webpack-contrib/extract-text-webpack-plugin), Webpack give us as a output a js file with some empty functions. I think that's files does'nt matter for us, so this plugin removes it.  :)

## Configuration:

```js
// webpack.config.js
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ExcludeAssetsPlugin = require("webpack-exclude-assets-plugin");

module.exports = {
  entry: { ... },
  output: {
    path: path.join(__dirname, 'dist'),
    filename: 'js/[name].js'
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css"
    }),
    new ExcludeAssetsPlugin({
      // path: string | [string]
      path: [
        '^js\/css\/.*\.js$',
        '^.*(?=!(foo)).+some[cool]RegExpHere$'
      ]
    })
  ],
  module: { ... },
  resolve: { ... }
};
```

## Example:

```js
// webpack.config.js
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ExcludeAssetsPlugin = require("webpack-exclude-assets-plugin");

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
      path: ['^js\/css\/.*\.js$']
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
```
### Output three **before** using `webpack-exclude-assets-plugin`:
```
.
├── css
│   └── app.css
└── js
    ├── app.js
    └── css
        └── app.js

3 directories, 3 files

```
### Output file three **after** using `webpack-exclude-assets-plugin`:
```
.
├── css
│   └── app.css
└── js
    └── app.js

2 directories, 2 files

```

## License

#### [MIT](./LICENSE)
