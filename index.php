<?php
echo '<pre>';
for ($index = 7; $index < 1e7; $index*=10) {
  printf("%5s", number_format($index,0,'.',' ') );
  echo ' | ';
}


