<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PT. Yamaha Motors</title>
</head>
<header>
    <h1>PT YAMAHA MOTORS</h1>
</header>
<form action="proses.php" method="POST">
    <fieldset>
    <p>
            <label for="id">ID : </label>
            <input type="text" name="id"/>
</p>
        <p>
            <label for="nama">Nama Pemilik : </label>
            <input type="text" name="nama"/>
</p>
<p>
    <label for="merk">Merk Motors : </label>
	  <select name='merk'>
		<option value='mio'>Mio</option>
        <option value='jupiter'>Jupiter</option>
        <option value='nmax'>Nmax</option>
        <option value='vixion'>Vixion</option>
</select>
</p>
<p>
    <label for="keluhan">Keluhan : </label>
    <input type="text" name="keluhan"/>
    <p>
            <input type="submit" value="Kirim" name="kirim" />
            </p>
        </fieldset>
    </form>
</body>
</html>