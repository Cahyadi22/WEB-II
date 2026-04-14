<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 50px;
        }
        .label {
            color: red;
            margin-right: 100px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <p><b>Buatlah tampilan dibawah ini</b></p>

    <form onsubmit="hitung(); return false;">
        <span class="label">Nilai I</span>
        <span class="label">Nilai II</span><br><br>

        <input type="number" id="nilai1" required>
        
        <select id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="number" id="nilai2" required>

        <button type="submit">submit</button>
    </form>

    <div class="result" id="hasil"></div>

    <p>
        Lakukanlah perhitungan dan tampilkan hasilnya dibawahnya masih dihalaman yang sama,
        boleh juga dikembangkan tampilkan di halaman baru.
    </p>
</div>

<script>
function hitung() {
    let n1 = parseFloat(document.getElementById("nilai1").value);
    let n2 = parseFloat(document.getElementById("nilai2").value);
    let op = document.getElementById("operator").value;
    let hasil;

    switch(op) {
        case '+': hasil = n1 + n2; break;
        case '-': hasil = n1 - n2; break;
        case '*': hasil = n1 * n2; break;
        case '/': hasil = n2 !== 0 ? n1 / n2 : "Tidak bisa dibagi 0"; break;
    }

    document.getElementById("hasil").innerHTML = "Hasil: " + hasil;
}
</script>

</body>
</html>
