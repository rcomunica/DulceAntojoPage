<form action="{{ route('home') }}" id="formContacUs" method="post">
@csrf
<div class="row g-3">
  <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Nombre <r>*</r></label>
    <input type="text" value="{{ old('nombre') }}" class="form-control" name="nombre" aria-label="First name">
    @error('nombre')
      <span class="errorContactUs">Ups! ingresa tu {{$message}} <i class="fa-solid fa-circle-exclamation"></i></span>
      <br>
      <br>
    @enderror
  </div>
  
  <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Apellido <r>*</r></label>
    <input type="text" class="form-control"name="apellido" {{ old('apellido') }} aria-label="Last name">
    @error('apellido')
      <span class="errorContactUs">Ups! ingresa tu {{$message}} <i class="fa-solid fa-circle-exclamation"></i></span>
      <br>
      <br>
    @enderror
  </div>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Celular / Telefono <r>*</r></label>
  <input type="text" class="form-control" {{ old('ContactoNumero') }} id="exampleFormControlInput1" name="ContactoNumero">
  @error('ContactoNumero')
  <span class="errorContactUs">Ups! ingresa tu celular / telefono <i class="fa-solid fa-circle-exclamation"></i></span>
  <br>
  <br>
@enderror
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
  <input type="email"  class="form-control" id="exampleFormControlInput1" name="correo">
</div>

<label for="exampleFormControlInput1" class="form-label">¿Cual es su solicitud? <r>*</r></label>

<select  name="['peticion']" class="form-select" aria-label="Default select example">
  <option selected>- - -</option>
  <option value="Cotizacion">Cotizacion</option>
  <option value="Peticion">Peticion</option>
  <option value="Queja">Queja</option>
  <option value="Reclamo">Reclamo</option>
  <option value="Sugerencia">Sugerencia</option>
  <option value="Felicitacion">Felicitacion</option>
</select>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Algun mensaje?</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name="correo" rows="3"></textarea>
</div>

<div class="row form-floating" style="justify-content: space-around">
    <input class="btn btn-primary btn-confirm_login" type="submit" value="Submit" style="justify-content: space-around">
</div>




</form>
