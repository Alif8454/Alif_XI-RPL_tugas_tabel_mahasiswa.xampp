<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
        <h2>Data Mahasiswa</h2>
        <table>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>jurusan</th>
                <th>tgl_lahir</th>
            </tr>
        </table>

        <!-- Kode PHP untuk Menampilkan ke halaman web -->
        <?php
            include "koneksi_data_mahasiswa.php";
            $no=1;
            $ambildata = mysqli_query($koneksi, "select * from tabel_mahasiswa");
                while ($tampil = mysqli_fetch_array($ambildata)){
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[id]</td>
                        <td>$tampil[nama]</td>
                        <td>$tampil[jurusan]</td>
                        <td>$tampil[tgl_lahir]</td>
                    </tr>";

                    $no++;
                }
        ?>





</body>
</html>

    