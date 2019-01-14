var AssetsPlugin = require("assets-webpack-plugin");
var assetsPluginInstance = new AssetsPlugin({ useCompilerPath: true });

module.exports = {
  filenameHashing: false,
  indexPath:
    process.env.NODE_ENV === "production" ? "index.blade.php" : "index.html",
  // path:
  devServer: {
    // port: "9876",
    headers: { "Access-Control-Allow-Origin": "*" },
    disableHostCheck: true
  },

  configureWebpack: {
    plugins: [assetsPluginInstance]
  }
};

// var publicPath;

// if (process.env.NODE_ENV === "production") {
//   publicPath = "/wp-content/themes/vue-cli-3-wp-theme";
// } else {
//   publicPath = "http://localhost:9876/";
// }
