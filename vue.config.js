const WebpackAssetsManifest = require("webpack-assets-manifest");

module.exports = {
  pages: {
    index: {
      entry: "src/frontend/main.js",
      template: "public/index.html",
      filename: "index.html",
      title: "FrontEnd Entry",
      chunks: ["chunk-vendors", "chunk-common", "index"]
    },
    admin: {
      entry: "src/admin/main.js",
      template: "public/index.html",
      filename: "admin/index.html",
      title: "Admin Page",
      chunks: ["chunk-vendors", "chunk-common", "admin"]
    }
  },

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
