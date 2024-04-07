<?php
if(!function_exists('custom_helper_ex')){
  function custom_helper_ex(){
    $lang_array=['C','C++','PHP','JAVA','PYTHON','JAVASCRIPT','SCALA','PERL'];
    echo "<select name=lang class=form-control>";
    echo "<option value=''> -- select Language -- </option>";
    foreach($lang_array as $lang){
      echo "<option value=$lang>$lang</option>";
    }
    echo "</select>";
  }
}
