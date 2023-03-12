<?php

require 'functions.php';
$id = $_GET["id"];

if(delete($id)>0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'admin.php';
    </script>
";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'admin.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
}
?>