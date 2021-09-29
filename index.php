<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Sederhana</title>
</head>
<body>
  <h2>Kalkulator Sederhana dengan PHP</h2>
   <form action="" method="get">
      <input type="number" name="val1" value="<?= isset($_GET['val1']) ? $_GET['val1'] : '' ?>"  placeholder="Masukkan data pertama" required ><br><br>
      <select name="operasi" required >
         <option value= "" <?= isset($_GET['operasi']) && $_GET['operasi'] == '' ? "selected" : '' ?> >Pilih Operasi</option>
         <option value="+" <?= isset($_GET['operasi']) && $_GET['operasi'] == '+' ? "selected" : '' ?> >+</option>
         <option value="-" <?= isset($_GET['operasi']) && $_GET['operasi'] == '-' ? "selected" : '' ?> >-</option>
         <option value="/" <?= isset($_GET['operasi']) && $_GET['operasi'] == '/' ? "selected" : '' ?> >/</option>
         <option value="*" <?= isset($_GET['operasi']) && $_GET['operasi'] == '*' ? "selected" : '' ?> >X</option>
      </select><br><br>
      <input type="number" name="val2" value="<?= isset($_GET['val2']) ? $_GET['val2'] : '' ?>" placeholder="Masukkan data kedua"  required ><br><br>
      <input type="submit" value="Hitung !">
     <a href="<?=$_SERVER['PHP_SELF']?>">Clear</a>
   </form>

   <?php 
    if(isset($_GET['val1']) && isset($_GET['val2']) && isset($_GET['operasi'])){
         $val1 = (float)$_GET['val1'];
         $val2 = (float)$_GET['val2'];
         $operasi = $_GET['operasi'];
         $hasil = '';

         if($operasi == '+'){
             $hasil = $val1 + $val2;
         }else if($operasi == '-'){
           $hasil = $val1 - $val2;
         }else if($operasi == '/'){
           $hasil = $val1 / $val2;
         }else if($operasi == '*'){
           $hasil = $val1 * $val2;
         }

         echo "<h1 style='color:red'>".$hasil."</h1>";
    }
   
   ?>
</body>
</html>