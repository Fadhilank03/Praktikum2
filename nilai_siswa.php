<?php

    $proses= $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $total = ($nilai_uts+$nilai_uas+$nilai_tugas)/3;
        

    if ($total > 55){
        echo "Lulus";
    }else{
        echo "Tidak Lulus";
    }
    
    if ($total >= 85) {
        $grade = "A";
    }
    else if ($total >= 70) {
        $grade = "B";
    }
    else if ($total >= 56) {
        $grade = "C";
    }
    else if ($total >= 36) {
        $grade = "D";
    }
    else if ($total >= 0) {
        $grade = "E";
    }
    else{
        $grade = "I";
    }
   
    if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    echo '<br/>total nilai : '.$total;
    }
?>