<?php

function celsius($nilai)//membuat fungsi menghitung konversi suhu ke celsius dengan nama fungsinya celscius dan variabel nilai//
{
    $fah = round(($nilai * 9 / 5) + 32,3);
    $rhe = round($nilai * 4 / 5,3);
    $kel = round($nilai + 273.15 ,2);
    $ran = round(($nilai + 273.15) * 9/5, 3);
    return "Hasil : Celcius = $nilai <sup>o</sup>C, Fahrenheit = $fah <sup>o</sup>F, Rheamur = $rhe <sup>o</sup>R, Kelvin = $kel <sup>o</sup>K, Rankine = $ran <sup>o</sup>Ra";
}
 
function fahrenheit($nilai)//membuat fungsi menghitung konversi suhu ke fahrenheit dengan nama fungsinya fahrenheit dan variabel nilai//
{
    $cel = round((($nilai) - 32) * 5 / 9, 3);
    $rhe = round(($nilai - 32) * 4 / 9, 3);
    $kel = round(((($nilai) - 32) * 5 / 9) + 273.15 ,3);
    $ran = round($nilai + 459.67, 3);
    return "Hasil : Fahrenheit = $nilai <sup>o</sup>F, Celcius = $cel <sup>o</sup>C, Rheamur = $rhe <sup>o</sup>R, Kelvin = $kel <sup>o</sup>K, Rankine = $ran <sup>o</sup>Ra";
}
 
function rheamur($nilai)//membuat fungsi menghitung konversi suhu ke  rheamur dengan nama fungsinya  rheamur dan variabel nilai//
{
    $fah = round(($nilai * 9 / 4) + 32, 3);
    $cel = round($nilai * 5 / 4, 3);
    $kel = round(($nilai * 5 / 4) + 273.15 , 3);
    $ran =  round($nilai * 2.25 + 32 + 459.67, 3);
    return "Hasil : Rheamur = $nilai <sup>o</sup>R, Celcius = $cel <sup>o</sup>C, Fahrenheit = $fah <sup>o</sup>F, Kelvin = $kel <sup>o</sup>K, Rankine = $ran <sup>o</sup>Ra";
}
 
function kelvin($nilai)//membuat fungsi menghitung konversi suhu ke  kelvin dengan nama fungsinya  kelvin dan variabel nilai//
{
    $fah = round(((($nilai - 273.15) * 9 / 5)) + 32, 3);
    $cel = round($nilai - 273.15, 3);
    $rhe = round(($nilai - 273.15) * 4 / 5, 3);
    $ran = round($nilai * 9/5, 3);
    return "Hasil : Kelvin = $nilai <sup>o</sup>K, Celcius = $cel <sup>o</sup>C, Fahrenheit = $fah <sup>o</sup>F, Rheamur = $rhe <sup>o</sup>R, Rankine = $ran <sup>o</sup>Ra";
}
 
function rankine($nilai)//membuat fungsi menghitung konversi suhu ke rankine dengan nama fungsinya rankine dan variabel nilai//
{
    $fah = round($nilai - 459.67, 3);
    $cel = round($nilai * 5 / 9 - 273.15, 3);
    $rhe = round(( $nilai - 32 - 459.67) / 2.25, 3);
    $kel = round($nilai * 5/9, 3);
    return "Hasil : Rankine = $nilai <sup>o</sup>Ra, Kelvin = $kel <sup>o</sup>K, Celcius = $cel <sup>o</sup>C, Fahrenheit = $fah <sup>o</sup>F, Rheamur = $rhe <sup>o</sup>R";
}
 
 
if(isset($_POST['hitung'])):// jika menerima perintah hitung dari file idex.php maka proses perhitungan dimulai
    echo '<h2>Hasil Perhitungan</h2>';
    if(!is_numeric($_POST['nilai'])):// jika inputan yang dimasukkan berupa angka maka akan lanjut keproses perhitungan jika tidak makan akan tampil pesan nilai belum ditentukan
        echo ('Nilai belum ditentukan </a><br/><br/>');
    elseif(isset($_POST['konversi'])):// menerima inputan dari file index.php maka akan ditampilkan kebrowser
        $hasil = '';
        foreach($_POST['konversi'] as $jenis){ // proses perulangan menggunakan foreach dengan dari variabel koversi diganti menjadi $jenis
            $hasil .= $jenis($_POST['nilai']).'<br/>';// lalu $hasil akan menampilkan $jenis($_POST['nilai'])
        }
        // cara singkat
       // $hasil .= '<h2>Hasil Perhitungan menggunakan cara singkat</h2>';
        //foreach($_POST['konversi'] as $jenis){
            //$hasil .= to_unit($_POST['nilai'],$jenis).'<br/>';
        //}
        echo $hasil.'<br/>';// menampilkan hasil konversi
    else:
        echo '<h2 style="color:red;">Silahkan tentukan pilihan konversi suhu dulu Kawan baru hitung!...</h2>'; // jika konversi belum ditentukan maka akan menampilkan pesan tersebut
    endif;
endif;