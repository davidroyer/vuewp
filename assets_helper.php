<?php
  function vuewp_isHMR() {
    $isHMR = file_exists(get_stylesheet_directory() . '/.hot');
    return $isHMR;
  }

  function vuewp_mix($file) {
    $mix_manifest_location = get_stylesheet_directory() . "/dist/vuewp-manifest.json";
    $mix_manifest = json_decode(file_get_contents($mix_manifest_location), true);
    $asset = $mix_manifest[$file];

    $prod_asset_base_url = get_template_directory_uri() . '/dist/';
    $dev_asset_base_url = 'http://localhost:8080/';

    if ( vuewp_isHMR() ) {
      if ($asset) return $dev_asset_base_url . $asset;
    } else {

      /**
       * Generate ID for cacheing
       */
        $dot_before_hash_position = strpos($asset, '.');
        $extension_position = strrpos($asset, '.');
        $id = substr($asset, $dot_before_hash_position + 1, 8);

        return $prod_asset_base_url . $asset . '?id=' . $id;
    }
  }
?>