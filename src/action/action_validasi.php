<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $comment = $_POST['komen'];
    $kataKasar = ['anjing', 'babi', 'bangsat', 'kontol', 'memek', 'ngentot', 'pepek', 'tetek', 'tete', 'tai', 'kampret', 'mbak', 'mbok', 'bego', 'tolol', 'goblok', 'bau', 'kotor', 'jelek', 'gila', 'bodoh', 'cok', 'dancok', 'dongo', 'dongo', 'dungu', 'goblok', 'idiot', 'imbecil', 'keparat', 'koplak','asu', 'mbleber', 'tolol', 'bajingan', 'banci', 'bego', 'bispak', 'bloon', 'bodoh', 'brengsek', 'budeg', 'cabe', 'cabe2an', 'cacad', 'cawet', 'cebong', 'cewek2an', 'ciblek', 'cina', 'cuki', 'cupu', 'dajal', 'dajjal', 'dongo', 'dongol', 'duyus', 'fak', 'fakk', 'fakkk', 'fakkkk',];


    $constkataKasar = false;
    foreach($kataKasar as $kata){
        if(stripos($comment, $kata) !== false){
            $constkataKasar = true;
            break;
        }
    }


    if($constkataKasar){
        header("Location: ../about.php?show_modal=true#komentar");
        exit;
    }else{
        session_start();
        include_once("../db/koneksi.php");
        $id_user = $_SESSION['id'];
        $comment = $_POST['komen'];
        $sql = "INSERT INTO komentar (id_user, isi) VALUES ('$id_user', '$comment')";
        mysqli_query($conn, $sql);
       header("Location: ../about.php?show_modal=false#komentar");
        exit;
    }

}