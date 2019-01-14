const WebpackAssetsManifest = require("webpack-assets-manifest");
const path = require("webpack-assets-manifest");
// var AssetsPlugin = require("assets-webpack-plugin");
// var assetsPluginInstance = new AssetsPlugin({ useCompilerPath: true });
module.exports = {
  // publicPath: "http://localhost:8080/",
  // outputDir: "./dist/",
  // filenameHashing: true,
  // outputDir: "http://localhost:8080/",
  // assetsDir: "http://localhost:8080/",
  publicPath:
    process.env.NODE_ENV === "production"
      ? "/wp-content/themes/vue-cli-3-wp-theme/dist/"
      : "http://localhost:8080/",
  indexPath:
    process.env.NODE_ENV === "production" ? "index.html" : "index.html",

  configureWebpack: {
    plugins: [
      new WebpackAssetsManifest({
        writeToDisk: true,
        output: "vuewp-manifest.json"
      })
    ]
  },
  devServer: {
    publicPath: "http://localhost:8080/",
    headers: { "Access-Control-Allow-Origin": "*" },
    disableHostCheck: true
  },
  chainWebpack: config => {
    // config.plugins.delete("html");
    config.plugins.delete("preload");
    config.plugins.delete("prefetch");
  }
  // chainWebpack: config => {
  //   config.optimization.splitChunks(false);
  // }
};
