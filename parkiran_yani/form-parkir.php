<html>
    <head>
</head>
<body>
    <h1>TARIF PARKIRAN YANI</h1>
<form action="proses-parkir.php" method="POST">
<form>
    <fieldset>
        <p>
            <label for="jenis_kendaraan"> Jenis Kendaraan :</label>
            <select name="jenis_kendaraan">
                <option value="motor"> Motor </option>
                <option value="mobil"> Mobil </option>
            </select>
        </p>
        <p>
            <label for="tanggal_masuk"> Tanggal Masuk :</label>
            <input type="date" name="tanggal_masuk" />
        </P>
        <p>
            <label for="jumlah_jam_parkir"> Jumlah Parkir :</label>
            <input type="number" name="jam" />
        </p>
        <p>
        Nilai pertama<input type="text" name="">
        </p>
        <p>
            <input type="submit" name="Bayar" value="bayar" />
        </p>
</fieldset>
</form>
</body>
</html>