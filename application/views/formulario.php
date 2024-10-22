

<main id="main" class="main">

<div class="pagetitle">
  <h1>REGISTRAR</h1>

   <!-- Vertical Form -->
   <form class="row g-3" action="<?= base_url("contactos/adicionar")?>" method="POST" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ingrese su nombre</label>
                  <input type="text" class="form-control" id="inputNanme4" name="nombre">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Ingrese su telefono</label>
                  <input type="text" class="form-control" id="inputTelefono" name="telefono">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Ingrese su email</label>
                  <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="col-12">
                  <input type="file" class="form-control" id="inputAddress" name="upload" id="upload" accept=".jpg , .png ">
                </div>
                <div class="text-center">
                <button id="boton" type="submit" class="btn btn-primary">NUEVO</button>
                </div>
              </form>
              <!-- Vertical Form -->