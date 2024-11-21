<?php
echo "Caso 1: ";

for ($i = 1; $i <= 9; $i++) {
  echo $i;
}

echo "<br /><br />";
echo "Caso 2: ";

for ($i = 1; $i <= 9; ) {
  echo $i;
  $i++;
}
echo "<br /><br />";

echo "Caso 3: ";
$i = 1;
for (; $i < 9; ) {
  echo $i;
  $i++;
}

echo "<br /><br />";

echo "Caso 4: ";

for ($i = 1; ; $i++) {
  if($i > 9){
    break;
  }
  echo $i;
}

echo "<br /><br />";

echo "Caso 5: ";
$i = 1;
for (; ; ) {
  if($i > 9){
    break;
  }
  echo $i;
  $i++;
}
?>