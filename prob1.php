<?php
  if(!is_numeric($_COOKIE['i-keeper'])) $_COOKIE['i-keeper']=1;
  if($_COOKIE['i-keeper']>=6) $_COOKIE['i-keeper']=1;
  if($_COOKIE['i-keeper']>5) solve(1);
  echo "<br>level : {$_COOKIE['i-keeper']}";
?>