<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>List Tugas PWEB Sebelum ETS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Playwrite+DK+Loopet:wght@100..400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="listtugas.css">
</head>
<body>
  <div class="container">
    <h1>List Tugas PWEB Sebelum ETS</h1>

    <div class="button-list">
      <button onclick="goToLink('http://127.0.0.1:8000/test')">Test (Berita web ITS, HTML saja)</button>
      <button onclick="goToLink('http://127.0.0.1:8000/pertama')">Pertama (Berita web ITS, HTML + CSS)</button>
      <button onclick="goToLink('http://127.0.0.1:8000/latihanKodeSoal1')">Latihan dengan kode soal (Web Helper)</button>
      <button onclick="goToLink('http://127.0.0.1:8000/template1')">Template 1</button>
      <button onclick="goToLink('http://127.0.0.1:8000/linktree2')">Tugas Linktree</button>
      <button onclick="goToLink('http://127.0.0.1:8000/js1')">Js1 (Kalkulator)</button>
      <button onclick="goToLink('http://127.0.0.1:8000/js2')">Js2 (Form pendaftaran)</button>
      <button onclick="goToLink('https://youtu.be/MjxmHXxcPok')">Tugas Video W3School</button>
  </div>
    </div>
  </div>

 <script>
  function goToLink(url) {
    window.location.href = url;
  }
</script>
</body>
</html>
