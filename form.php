<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        input:focus, select:focus {
            border-color: #66afe9;
            outline: none;
            box-shadow: 0 0 5px rgba(102, 175, 233, .6);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button.edit {
            background-color: #ffc107;
        }

        .button.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h1>Masukkan Data Diri Anda</h1>
    <form action="insertdata.php" method="post">
        <label for="nim" id="nim">Nim</label>
        <input type="text" name="nim" required>
        <br>
        <label for="nama" id="nama">Nama</label>
        <input type="text" name="nama_depan" required>
        <br>
        <label for="kode_prodi">Kode Prodi</label>
        <input type="text" name="kode_prodi" required>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="" disabled selected>Pilih Jenis</option>
            <option value="laki">L</option>
            <option value="Perempuan">P</option>
        </select>
        <br>
        <input type="submit" value="Tambah">

    </form>

    <h2>Daftar Mahasiswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama </th>
                <th>Kode Prodi</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be displayed here -->
        </tbody>
    </table>
</body>
</html>