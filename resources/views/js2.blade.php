<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <script src="myscript.js">
        function changeText() {
            var span = document.getElementById("output");
            var textBox = document.getElementById("textbox");

            textbox.style.color = "purple";
            textbox.style.fontSize = "13pt";
            textbox.style.fontFamily = "Comic Sans MS";
            span.className = "text-success" ; // LANGSUNG GANTI 1 CLASS

            span.innerHTML = textbox.value;
            hadiah() ;

        }
    </script>
</head>

<body>
    <div>
        <div class="form-group">
            <label for="bil1">Bilangan 1:</label>
            <input type="number" class="form-control" id="bil1">
          </div>
          <div class="form-group">
            <label for="bil2">Bilangan 2:</label>
            <input type="number" class="form-control" id="bil2">
          </div>
          <h1>
            Hasil Operasi: <div id="hasil"></div>
          </h1>
          <input type="button" value="Penjumlahan" class="btn btn-success" onclick="tambah">
          <input type="button" value="perkalian" class="btn btn-warning" onclick="kali">
    </div>
</body>
</html>
