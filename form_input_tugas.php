<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>PHP Dasar</title> 
    </head> 
    <body> 
        <h2>Form Input</h2> 
        <form method="post" action="form_ouput_tugas.php">
            <fieldset>
            <label>Nama : </label>
            <input type="text" name="nama" ><br>
            <label>Tanggal lahir : </label>
            <input type="date" name="tgl_lahir"><br>
            <label>Pekerjaan : </label>
            <select id=pekerjaan name=pekerjaan>
            <option value="Software Engginer">Software Engginer</option>
            <option value="Konsultan IT">Konsultan IT</option>
            <option value="Desainer Grafis">Desainer Grafis</option>
            <option value="Web Desainer">Web Desainer</option>
            </select><br>
            <input type="submit" value=" Simpan ">
        </fieldset>
        </form> 
    </body> 
</html>