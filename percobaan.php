<?php
    $total_belanja = 150000;

    if($total_belanja > 100000);
    echo " Anda Dapat Hadiah!";
?>

<?php
    $umur = 13;
    if ($umur < 18) {
        echo "Kamu tidak boleh membuka situs ini!";
    } else {
        echo "Selamat datang di website kami!";
    }
?>

<?php
    $nilai = 88;

    if ($nilai > 90) {
        $grade = "A";
    } elseif ($nilai > 80){
        $grade = "B";
    } elseif ($nilai > 60){
        $grade = "C";
    } elseif ($nilai > 40){
        $grade = "D";
    } elseif ($nilai > 30){
        $grade = "E";
    } else {
        $grade = "F";
    }

    echo "Nilai anda: $nilai";
    echo "\n";
    echo "Grade: $grade";
?>

<?php
$level = 3;
    switch ($level) {
        case 1:
            echo "pelajari HTML";
            break;
        case 2:
            echo "Pelajari CSS";
            break;
        case 3:
            echo "Pelajari PHP";
            break;
        default:
            echo "Kamu bukan programmer";
    }
?>