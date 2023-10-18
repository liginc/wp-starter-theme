<?php

/**
 * utility functions
 */

/**
 * @return SVGスプライトを返す
 */
function get_svg_sprite($name)
{
  return  '<svg class="svg-sprited svg-' . $name . '" role="img"><use xlink:href="#' . $name . '" /></svg>';
}
