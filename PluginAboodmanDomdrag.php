<?php
/**
 Javascript to make an element drag able.
 */
class PluginAboodmanDomdrag{
  /**
  <p>
  Including this in html/head section.
  </p>
  #code-yml#
  type: widget
  data:
    plugin: 'aboodman/domdrag'
    method: include
  #code#
  #code-javascript#
  #load:[web_dir]/plugin/[plugin]/dom-drag.js:load#
  #code#
  */
  public static function widget_include(){
    $element = wfDocument::createHtmlElement('script', null, array('src' => '/plugin/aboodman/domdrag/dom-drag.js'));
    wfDocument::renderElement(array($element));
  }
}