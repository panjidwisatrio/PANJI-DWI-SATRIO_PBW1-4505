<?php
echo "SOAL NOMOR 1<br>";
$string = "D3 Rekayasa Perangkat Lunak Aplikasi";

echo substr($string, 3) . "<br>";
echo substr($string, -8) . "<br>";
echo substr($string, 3, 24) . "<br><br>";

echo "SOAL NOMOR 2<br>";
$strings = array(
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
);

$search = array(
    'Abdullah',
    'kucing',
    'lucu',
    'bermain'
);

$replace = array(
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
);

$replaced = str_replace($search, $replace, $strings);

foreach ($replaced as $key => $value) {
    echo "$key = $value" . "<br>";
}

echo "<br>";

echo "SOAL NOMOR 3<br>";
$str = 'My Password';
$user = 'username';
echo sprintf("The md5 hashed password of %s: %s\n", $str, md5($str.$user));
echo "<br>";
echo sprintf("The sha1 hashed password of %s: %s\n", $str, sha1($str.$user));
echo "<br>";
echo sprintf("The bin2hex hashed password of %s: %s\n", $str, bin2hex($str.$user));
echo "<br><br>";

function primeNumber($head, $last) {
    if ($head >= $last) {
        echo "Error: head more than last";
    } else {
        $size = 0;
        for ($head; $head <= $last; $head++) {
            $count = 0;
            for ($i = 1; $i <= $last; $i++) {
                if ($head % $i == 0) {
                    $count++;
                }
            }
            if ($count == 2) {
                echo "$head ";
                $size++;
            }
        }
        echo "<br>jumlah bilangan prima: $size<br><br>";
    }
}

echo "SOAL NOMOR 4<br>";
primeNumber(1, 20);

echo "SOAL NOMOR 5<br>";
function primeNumberEnhanced($head, $last) {
    $size = 0;
    for ($i = $head; $i <= $last; $i++) {
        if (thisPrime($i)) {
            echo "$i ";
            $size++;
        }
    }
    echo "<br>jumlah bilangan prima: " . $size . "<br><br>";
}

function thisPrime($number) {
    if ($number == 1) {
        return false;
    }

    if ($number == 2) {
        return true;
    }

    $x = sqrt($number);
    $x = floor($x);

    for ($i = 2; $i <= $x; $i++) {
        if ($number % $i == 0) {
            break;
        }
    }

    if ($x == $i-1) {
        return true;
    } else {
        return false;
    }
}

primeNumberEnhanced(1, 30);
?>