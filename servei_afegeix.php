<html>
<head>
  <title>Afegeix Nom i Descripció</title>
</head>
<body>

<form action="servei_afegeix_id.php" method="post">
  Nom: <input type="text" name="name"><br>
  Preu: <input type="text" name="price"><br>
  Descripcció: <input type="text" name="description"><br>
  Categoria: 
  <select name="categoria" id="cat">
    <?php
      include("connexio_woo.php");
      foreach($woocommerce->get('products/categories') as $cat) {
        if($cat->id != 15)
          echo "<option value='".$cat->id."'>".$cat->name."</option>";
      }
    ?>
  </select><br>
  Imatge: 
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value = "Enviar">
</form>


</body>
</html>