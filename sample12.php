<?php 
    date_default_timezone_set('Asia/Tokyo');
    $time = date('G');
?>



<?php
    if ($time < 9) {
        echo '※営業時間外です';
    } else {
        echo 'ようこそ';
    }
?>

<br>

<?php 

$s = '';
if ($s !== '') {
    echo '$sには文字が入っています';
} 



$x = 0;
if ($x) {
    echo '$xは0ではありません';
}


$x = 0;
if ($x === 0) {
    echo '$xは0です';
}
?>






