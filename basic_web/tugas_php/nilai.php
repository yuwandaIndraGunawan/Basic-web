<?php
$nilai = 91;
echo "Nilai angka : $nilai";
switch (true)
{
	case ($nilai > 90 && $nilai <= 100) :
		echo '<br> nilai huruf : A ';
		break;
	case ($nilai > 80 && $nilai <= 90) :
		echo '<br> nilai huruf : B ';
		break;
	case ($nilai > 70 && $nilai <= 80) :
		echo '<br> nilai huruf : C ';
		break;
    case ($nilai >= 0 && $nilai <= 70) :
        echo '<br> nilai huruf : D ';
            break;
	default : 
		echo 'perlu ditingkatkan lagi';
}
?>