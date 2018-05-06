<?php

class FormModel
{
    public function mengisi()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $city = $_POST["city"];
            $date = $_POST["date"];
            $email = $_POST["email"];
            $Radio = $_POST["Radio"];
            $kerjaan = $_POST["kerjaan"];
            $motto = $_POST["motto"];
            $nama = $_FILES['foto']['name'];
            $temp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($temp, "./filebaru.jpg");
        } else {
            $name = " ";
            $city = " ";
            $date = " ";
            $email = " ";
            $Radio = " ";
            $kerjaan = " ";
            $motto = " ";
            $nama = " ";
            $temp = " ";
        }

        $coba = array(
            'name' => $name,
            'city' => $city,
            'date' => $date,
            'email' => $email,
            'Radio' => $Radio,
            'kerjaan' => $kerjaan,
            'motto' => $motto,
            'kerjaan' => $kerjaan
        );
        return $coba;
    }

    public function random()
    {
        $kamar = ['depan', 'tengah 1', 'tengah 2', 'belakang'];
        $randomElement = $kamar[array_rand($kamar)];
        return $randomElement;
    }
}