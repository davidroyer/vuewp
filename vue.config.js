// var publicPath;

// if (process.env.NODE_ENV === "production") {
//   publicPath = "/wp-content/themes/vue-cli-3-wp-theme";
// } else {
//   publicPath = "http://localhost:9876/";
// }

module.exports = {
  publicPath:
    process.env.NODE_ENV === "production"
      ? "/wp-content/themes/vue-cli-3-wp-theme"
      : "http://localhost:9876/",
  // filenameHashing: false,
  indexPath:
    process.env.NODE_ENV === "production" ? "index.blade.php" : "index.html",
  // path:
  devServer: {
    port: "9876",
    headers: { "Access-Control-Allow-Origin": "*" },
    disableHostCheck: true
  }
};
