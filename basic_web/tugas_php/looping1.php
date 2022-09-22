<?php
$rows = 8; // add your number of row
for($index = 0; $index <= $rows; ++$index)
{
for($j=0; $j<=$index; ++$j)
{
echo ($j."&nbsp;"); //add space in numbers
}
echo ("<br>"); // brake line
}
?>