<?php
  function vuewp_isHMR() {
    $isHMR = file_exists(plugin_dir_path( __FILE__ ) . '/hot');
    echo 'FOUND HOT';
    return $isHMR;
  }

  function vuewp_mix($file) {
    $mix_manifest_location = plugin_dir_path( __FILE__ ) . "/dist/webpack-assets.json";
    $mix_manifest = json_decode(file_get_contents($mix_manifest_location), true);

    $style = $mix_manifest['app'][$file];
    echo $style;
    $assets_base_url = plugin_dir_url( __FILE__ ) . '/dist';
    $dev_asset_base_url = 'http://localhost:8080/app.js';

    return $dev_asset_base_url . $style;

    if ( vuewp_isHMR() ) {
        echo 'IS HMR';
        echo $dev_asset_base_url . $style;
      return $dev_asset_base_url . $style;
    } else {
        echo 'NOT HMR';
        echo $assets_base_url . $style;
      return $assets_base_url . $style;
    }
  }
?>
