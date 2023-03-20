<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 2</title>
</head>
<body>
    <form action="tampil.php" method="POST"> 
        <table align="center" cellspacing="0" cellpadding="5" bordercolor="black"> 
            <tr> 
                <th colspan="3"><u>Pratikum 2 - PHP Dasar</u></th> 
            </tr> 
            <tr> 
                <td>Nama</td> 
                <td>:</td> 
                <td><input type="text" name="nama" placeholder="Nama Anda" /></td>
            </tr> 
            <tr> 
                <td>Tanggal Lahir</td> 
                <td>:</td> 
                <td><input type="date" name="tgl" placeholder="TanggaL Lahir"></td>
            </tr>  
            <tr>
                <td>Pekerjaan</td> 
                <td>:</td> 
                <td><select name="kerja"> 
                    <option selected disabled>Pilih Pekerjaan...</option> 
                    <option value="Programmer">Programmer</option> 
                    <option value="Guru">Guru</option> 
                    <option value="Dokter">Dokter</option>
                    <option value="Arsitek">Arsitek</option> 
                    </select>
                </td> 
            </tr>  
            <tr> 
                <th colspan="3"> 
                    <input type="submit" value="Simpan"> 
                    <input type="reset" value="Reset"> 
                </th> 
            </tr> 
        </table> 
    </form> 
</body>
</html>