<?php

$conn = mysqli_connect("localhost", "root", "", "tubes");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function search($keyword){
    $query = "SELECT * FROM product
    WHERE
    gambar LIKE '%$keyword%' OR
    nama LIKE '%$keyword%' OR
    harga LIKE '%$keyword%'
    ";
    return query($query);
}

function tambah($data){
    global $conn;
    // $gambar = htmlspecialchars($data["gambar"]);
    
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
           // query insert data
    $query = "INSERT INTO product
    VALUES
    ('', '$gambar', '$nama', '$harga')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function upload() {

    $nama_file=$_FILES['gambar']['name'];
    $ukuran_file=$_FILES['gambar']['size'];
    $error=$_FILES['gambar']['error'];
    $tmpfile=$_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if($error==4){
        echo "
            <script>
                alert('Tidak ada gambar yang diupload');
            <Script>
        ";
        return false;
    }
    // cek apakah yang diupload adalah gambar
    $jenis_gambar=['jpg', 'jpeg', 'gif', 'png', 'jfif', 'webp'];
    $pecah_gambar=explode('.', $nama_file);
    $pecah_gambar=strtolower(end($pecah_gambar));

    if(!in_array($pecah_gambar,$jenis_gambar)){
        echo "
            <script>
                alert('yang anda upload bukan file gambar');
            <script>
        ";
        return false;
    }

    //cek jika ukurannya terlalu besar

    // lolos pengecekan
    $namafilebaru=uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $pecah_gambar;

    move_uploaded_file($tmpfile,'img/'.$namafilebaru);

    return $namafilebaru;

}

function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM product WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id"];

    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
   
        // query insert data
$query = "UPDATE product SET
            gambar = '$gambar',
            nama = '$nama',
            harga = '$harga'
        WHERE id = $id
        ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}
?>