<?php
$conn = mysqli_connect("localhost", "root", "", "coba"); 

function query($query) { 
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}






function tambah($data) {
    global $conn;
    $Img = $data["IMG"];
    $Tulisan = $data["Tulisan"];

        $Tampung_gambar = "INSERT INTO images (IMG, Tulisan) VALUES ('$Img', '$Tulisan')";
        mysqli_query($conn, $Tampung_gambar);
        return mysqli_affected_rows($conn);
}


function tambahK($data) {
    global $conn;

    $nama = $data["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];
 


        $Tampung_Pesan = "INSERT INTO kontak (Nama, Email, Pesan) VALUES ('$nama','$email','$pesan')";
        mysqli_query($conn,  $Tampung_Pesan);
        return mysqli_affected_rows($conn);
}






if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['gambar']) && isset($_POST['Tulisan'])) {
        $target_gambar = "IMG/";
        $target_file = $target_gambar . basename($_FILES["gambar"]["name"]);
        $tipe_file = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $cek_gambar = getimagesize($_FILES["gambar"]["tmp_name"]);

        if ($cek_gambar !== false) {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                $data = [
                    "IMG" => basename($_FILES["gambar"]["name"]),
                    "Tulisan" => $_POST['Tulisan']
                ];

                $result = tambah($data);

                if ($result > 0) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Gagal menambahkan data!";
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file Anda.";
            }
        } else {
            echo "File bukan gambar.";
        }
    } else {
        global $nama, $email, $pesan, $Img, $Tulisan;
        $Tampung_gambar = "INSERT INTO images (Nama, Email, Pesan, IMG, Tulisan) VALUES ('$nama', '$email', '$pesan', '$Img', '$Tulisan')";
    }
}
?>
