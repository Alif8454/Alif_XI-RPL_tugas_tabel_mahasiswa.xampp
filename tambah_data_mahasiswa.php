<h3>Tambah Data Siswa</h3>
    <title>Form Data Siswa</title>
            <form method="post" action="">
                <table>
                    <tr>
                        <td>id</td>
                        <td><input type="number" id="id" name="id" required><br><br></td>
                        
                        <td>nama</td>
                        <td><input type="text" id="nama" name="nama" required><br><br></td>
                        
                        <td>jurusan</td>
                        <td><input type="text" id="jurusan" name="jurusan" required><br><br></td>

                        <td>tgl_lahir</td>
                        <td><input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br></td>

                        <td></td>
                        <td><input type="submit" value="Simpan" name="proses"></td>
                    </tr>
                </table>
            </form>
<?php
    include "koneksi_data_mahasiswa.php";

    if (isset($_POST['proses'])){
        mysqli_query($koneksi, "insert into data_mahasiswa set
        id = '$_POST[id]',
        nama = '$_POST[nama]',
        jurusan = '$_POST[jurusan]',
        tgl_lahir = '$_POST[tgl_lahir]',
        
         ");
    }
        echo "Data siswa baru telah tersimpan";
    

?>