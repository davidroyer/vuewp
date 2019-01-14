<?php
  function vuewp_isHMR() {
    $isHMR = file_exists(get_stylesheet_directory() . '/.hot');
    // echo 'FOUND HOT';
    return $isHMR;
  }

  function vuewp_mix($file) {
    $mix_manifest_location = get_stylesheet_directory() . "/dist/vuewp-manifest.json";
    $mix_manifest = json_decode(file_get_contents($mix_manifest_location), true);
    print_r($mix_manifest);
    $style = $mix_manifest[$file];
    echo 'STYLE: <BR>';
    echo $style;
    $assets_base_url = get_template_directory_uri() . '/dist/';
    $dev_asset_base_url = 'http://localhost:8080/';

    // return $dev_asset_base_url . $style;
  // $result = vuewp_isHMR();

    if ( vuewp_isHMR() ) {
        echo 'IS HMR';
        if ($style) {
          echo $dev_asset_base_url . $style;
          return $dev_asset_base_url . $style;
        }
    } else {
        echo 'NOT HMR';
        echo $assets_base_url . $style;
      return $assets_base_url . $style;
    }
  }
?>
