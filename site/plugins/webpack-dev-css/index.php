<?php
  // ref https://github.com/brocessing/kirby-webpack

  // check for header set in browsersync (tools/srcServer)
  function isWebpack() {
    return !!(
      isset($_SERVER['HTTP_X_FORWARDED_FOR'])
        && $_SERVER['HTTP_X_FORWARDED_FOR'] == 'webpack'
    );
  }

  // Use instead of css() for all your css files generated by webpack.
  // This will enable the livereload feature when your are in development
  function liveCSS ($href, $media = null) {
    return isWebpack()
      // treat the .css file as .js in dev mode
      ? js($href)
      : css($href, $media);
  }