<?php $page_title = "Contacto - Rodul S.A. de C.V." ?>
<?php include('includes/header.php'); ?>

<style>
#success_message {
  display: none;
}
</style>


<div class="container">
  <h1>Contacto</h1>
    <form class="well form-horizontal" action="contact.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>¿Tiene un proyecto o requiere una cotización? Nosotros podemos ayudarle.</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nombre</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="Nombre" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Correo</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="Correo Electrónico" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Teléfono</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(55) 1001-00-22" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">Mensaje</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Mensaje"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">¡Su mensaje ha sido enviado! <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por contactarnos, en breve nos pondremos en contacto.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning">Enviar <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->



<?php include('includes/footer.php'); ?>
