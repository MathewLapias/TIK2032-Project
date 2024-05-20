<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// Membuat fungsi JUDUL dari kolom Judul pada Tabel artikel
function JUDUL($conn, $id) {
    $sql = "SELECT Judul FROM artikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["Judul"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Memanggil fungsi JUDUL
  $judul1 = JUDUL($conn, 1);
  $judul2 = JUDUL($conn, 2);
  $judul3 = JUDUL($conn, 3);
  
  

  // Membuat fungsi DESC dari kolom Deskripsi pada Tabel artikel
  function DESC($conn, $id) {
      $sql = "SELECT Deskripsi FROM artikel WHERE id=" . $id;
      $result = $conn->query($sql);
    
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["Deskripsi"];
      } else {
        return "0 results";
      }
    }
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Memanggil fungsi DESC
    $desc1 = DESC($conn, 1);
    $desc2 = DESC($conn, 2);
    $desc3 = DESC($conn, 3);
    

  
  // Membuat fungsi URL dari kolom Url pada Tabel artikel
  function URL($conn, $id) {
      $sql = "SELECT Url FROM artikel WHERE id=" . $id;
      $result = $conn->query($sql);
    
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["Url"];
      } else {
        return "0 results";
      }
    }
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // Memanggil fungsi URL
    $Url1 = URL($conn, 1);
    $Url2 = URL($conn, 2);
    $Url3 = URL($conn, 3);

  
  $conn->close();
  ?>