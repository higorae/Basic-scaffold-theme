<?php
  /**
  * 
  */
  class Helper
  {
    
    static $env = "development";
    
    function __construct()
    {
        
    }
    
    /*
    * Adiciona arquivos css
    */
    static function css($files = array(), $echo = true)
    {
      // Merge files to default css files
      if(self::$env == "development") {
        $default_css = array("normalize.css", "styles.less");
      } else {
        $default_css = array("normalize.css");
      }
      $files = array_merge($files, $default_css);

      $return = "<!-- ## CSS files -->\n";
      foreach($files as $file) {
        $end = end(explode(".", $file));

        if($end == "less") {
          $rel = "stylesheet/less";
        } else {
          $rel = "stylesheet";
        }
        $return .= "<link rel='{$rel}' href='". get_bloginfo('template_url')."/lib/css/{$file}' type='text/css' media='screen' />\n";
      }
      $return .= "<!-- ## end CSS files -->\n";

      if($echo) {
        echo $return;
      } else {
        return $return;
      }
    }
    
    static function js($files = array(), $echo = true)
    {
      // Merge files to default css files
      if(self::$env == "development") {
        $default_css = array("jquery.js", "less.js");
      } else {
        $default_css = array("jquery.js");
      }
      $files = array_merge($files, array("jquery.js", "less.js"));
      
      $return = "<!-- ## JS files -->\n";
      foreach($files as $file) {
        $return .= "<script src='".get_bloginfo('template_url')."/lib/js/{$file}' type='text/javascript'></script>\n";
      }
      $return .= "<!-- ## end JS files -->\n";

      if($echo) {
        echo $return;
      } else {
        return $return;
      }
    }
  }
  
  
?>