<?php $validation = \Config\Services::validation(); ?>
<form class="row g-3" method="post" action="<?php echo base_url('/formValidation') ?>">
  <?= csrf_field(); ?>
  
  <?php if (!empty(session()->getFlashdata('fail'))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
  <?php endif; ?>
  
  <?php if (!empty(session()->getFlashdata('success'))) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
  <?php endif; ?>

  <div class="col-md-6">
    <label for="inputName" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputName" name="nombre">
    <!-- Error -->
    <?php if ($validation->getError('nombre')) { ?>
      <div class="alert alert-danger mt-2">
        <?= $validation->getError('nombre'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <label for="inputLastname" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="inputLastname" name="apellido">
    <!-- Error -->
    <?php if ($validation->getError('apellido')) { ?>
      <div class="alert alert-danger mt-2">
        <?= $validation->getError('apellido'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <label for="inputUsuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="inputUsuario" name="usuario">
    <!-- Error -->
    <?php if ($validation->getError('usuario')) { ?>
      <div class="alert alert-danger mt-2">
        <?= $validation->getError('usuario'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="email">
    <!-- Error -->
    <?php if ($validation->getError('email')) { ?>
      <div class="alert alert-danger mt-2">
        <?= $validation->getError('email'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="col-12">
    <label for="inputPassword" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Debe tener de 8 a 10 caracteres">
    <!-- Error -->
    <?php if ($validation->getError('pass')) { ?>
      <div class="alert alert-danger mt-2">
        <?= $validation->getError('pass'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="col-12">
    <label for="inputPassword2" class="form-label">Repetir contraseña</label>
    <input type="password" class="form-control" id="inputPassword2" name="pass_confirm">
    <!-- Error -->
    <?php if ($validation->getError('pass_confirm')) { ?>
      <div class="alert alert-danger mt-2">
        <?= $validation->getError('pass_confirm'); ?>
      </div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="inputCity" name="ciudad">
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">Provincia</label>
    <select id="inputState" class="form-select" name="provincia">
      <option selected>Seleccionar</option>
      <option value="Corrientes">Corrientes</option>
      <option value="Chaco">Chaco</option>
      <option value="Formosa">Formosa</option>
      <option value="Entre Ríos">Entre Ríos</option>
      <option value="Santa Fé">Santa Fé</option>
    </select>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrarme</button>
  </div>
</form>
