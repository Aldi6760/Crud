<!-- menghapus data -->
<?php
require('koneksi.php');

if(isset($_GET['hapus'])) {
  $nim = $_GET['hapus'];
  mysqli_query($conn, "DELETE FROM utspwtm WHERE nim = '$nim' ");
  header('Location: portfolio.php');
  exit;
}
// imengambil data
function ambilData($param)
{
    global $conn;
    $data = mysqli_query($conn, $param);
    $rows = [];
    while ($row = mysqli_fetch_assoc($data)) {
        $rows[] = $row;

    }
    return $rows;
    
}
$data = ambilData("SELECT * FROM  utspwtm");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Aldi Sutanto Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo"><strong>Aldi Sutanto</strong></div>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#resume">Resume</a>
      <a href="#form">Form</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-text">
      <p>Hello!</p>
      <h1>I'm <span>Aldi Sutanto</span></h1>
      <p>I am a student at Universitas Budi Luhur</p>
      <div class="hero-buttons">
        <button class="btn-yellow">Hire Me</button>
        <button class="btn-dark">My Works</button>
      </div>
    </div>
    <img src="Aset/fotoku-removebg-preview.png" alt="Aldi Sutanto" />
  </section>

  <!-- About Section -->
  <section class="section about" id="about">
    <div class="about-content">
      <img src="Aset/foto3-removebg-preview.png" alt="Aldi Sutanto">
      <div class="about-info">
        <h2>About Me</h2>
        <div class="about-text">
          <p><strong>Name:</strong> Aldi Sutanto</p>
          <p><strong>Date of birth:</strong> December-14-2004</p>
          <p><strong>Address:</strong> Pekalongan, Jawa Tengah</p>
          <p><strong>Email:</strong> Email@example.com</p>
          <p><strong>Phone:</strong> +6285211426640</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Resume Section -->
  <section class="section resume" id="resume">
    <h2>Resume</h2>

    <div class="resume-item">
  <h3>2022 — Learning React and GitHub</h3>
  <p>Platform: Dicoding & YouTube</p>
</div>

<div class="resume-item">
  <h3>2023–Present — Informatics Engineering Student</h3>
  <p>Budi Luhur University</p>
</div>

<div class="resume-item">
  <h3>2023 — Created Personal Portfolio Website</h3>
  <p>HTML, CSS, JavaScript,php</p>
</div>

<div class="resume-item">
  <h3>2024 — Front-End Developer Intern</h3>
  <p>Startup: LocalTech</p>
</div>
  </section>

  <!-- Form Section -->
<section class="section" id="form">
  <div class="form-container">
    <div>
      <h2>Insert Data Mahasiswa</h2>
      <form action="simpan.php" method="post" class="mahasiswa-form">
        <div>
          <label for="nama">Nama Mahasiswa:</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required />
        </div>
        <div>
          <label for="nim">NIM:</label>
          <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required />
        </div>
        <div>
          <label for="prodi">Prodi:</label>
          <input type="text" id="prodi" name="prodi" placeholder="Contoh: Teknik Informatika" required />
        </div>
        <div>
          <label for="alamat">Alamat:</label>
          <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
</section>

<!-- Edit data mahasiswa -->
<section class="section-2" id="form-2">
  <h2>Edit data mahasiswa</h2>
  <form action="simpan.php" method="post" class="mahasiswa-form">
    <div>
      <label for="nim-2">NIM:</label>
      <input type="text" id="nim-2" name="nim-2" placeholder="Masukkan NIM" required />
    </div>
    <div>
      <label for="nama-2">Nama Mahasiswa:</label>
      <input type="text" id="nama-2" name="nama-2" placeholder="Masukkan nama" />
    </div>
    <div>
      <label for="prodi-2">Prodi:</label>
      <input type="text" id="prodi-2" name="prodi-2" placeholder="Contoh: Teknik Informatika" />
    </div>
    <div>
      <label for="alamat-2">Alamat:</label>
      <textarea id="alamat-2" name="alamat-2" placeholder="Masukkan alamat lengkap"></textarea>
    </div>
    <button type="submit" name="submit-2">Submit</button>
  </form>
</section>

<!-- Tabel Data Mahasiswa -->
<section class="section" id="data-mahasiswa">
  <h2>Data Mahasiswa</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- kalo data tidak di temukan -->
        <?php
        if(!$data) {
          echo '<tr><td colspan="5" style="text-align:center;">Data tidak ditemukan!</td></tr>';
        } 

        else {
          foreach($data as $d) {
            ?>
            <tr>

<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['nim']; ?></td>
<td><?php echo $d['prodi']; ?></td>
<td><?php echo $d['alamat'] ?></td>

<td>
  <a href="portfolio.php?hapus=<?php echo $d['nim']; ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
  </td>
          </tr>
            <?php

          }
        }
        
        ?>
    </tbody>
  </table>
</section>

  <footer>
    <p>&copy; 2025 Aldi Sutanto. All rights reserved.</p>
  </footer>

</body>
</html>
