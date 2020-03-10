<?php
    require_once 'koneksi.php';

    function query($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] =  $row;
        }
        return $rows;
    }

    function editProfile($data)
    {
        global $koneksi;
        $id = $data["id"];
        $name = $data["name"];
        $username = $data["username"];
        $website = $data["website"];
        $bio = $data["bio"];
        $email = $data["email"];
        $no_telp = $data["no_telp"];
        $gender = $data["gender"];

        $query = "UPDATE profile SET name = '$name', username = '$username'  , website = '$website', bio = '$bio', email = '$email',no_telp = '$no_telp', gender = '$gender'  
        WHERE id = $id  ";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }

    ?>