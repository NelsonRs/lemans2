<?php
if (isset($_POST['val'])) {
  echo '<script>alert("Hola")</script>';
}
?>
 <!-- MODAL MARK -->
 <div id="markModal" class="modal">
    <div class="content">
      <span id="closer" class="close">&times;</span>
      <h3>Registrar Marca</h3>
      <form action="/admin/models/query.php" method="post">
        <input class="modal-input" type="text" name="name" placeholder="Nombre" required>
        <select hidden name="type">
            <option value="brand" selected></option>
          </select><br>
        <button class="btn" name="saveAll" type="submit">Registrar</button>
      </form>
    </div>
  </div>

  <!-- MODAL MATERIAL -->
  <div id="materialModal" class="modal">
    <div class="content">
      <span id="closer" class="close">&times;</span>
      <h3>Registrar Material</h3>
      <form action="/admin/models/query.php" method="post">
        <input class="modal-input" type="text" name="name" placeholder="Nombre" required>
        <select hidden name="type">
            <option value="material" selected></option>
          </select><br>
        <button class="btn" name="saveAll" type="submit">Registrar</button>
      </form>
    </div>
  </div>
      <!-- MODAL COLOR -->
  <div id="colorModal" class="modal">
    <div class="content">
        <span id="closer" class="close">&times;</span>
        <h3>Registrar Color</h3>
        <form action="/admin/models/query.php" method="post">
          <input class="modal-input" type="text" name="name" placeholder="Nombre" required>
          <select hidden name="type">
            <option value="color" selected></option>
          </select><br>
          <button class="btn" name="saveAll" type="submit">Registrar</button>
        </form>
    </div>
  </div>
  <div id="updateModal" class="modal">
    <div class="content">
        <span id="closer" class="close">&times;</span>
        <h3>Cambiar Imagen</h3><br>
        <form action="/admin/models/query.php" method="post" enctype="multipart/form-data">
          <input type="file" name="image" required><br>
          <input id="valll" hidden type="text" name="val" value=""><br>
          <button class="btn" name="updateImage" type="submit">Actualizar Imagen</button>
        </form>
    </div>
  </div>