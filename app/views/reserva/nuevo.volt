{{ content() }}

<h1>Nueva Reserva</h1>

{{ form("reserva/guardar/", "method":"post", "class":"form-container form-horizontal", "data-parsley-validate" : "") }}
    <div class="form-group">
        <label class="col-sm-2 control-label" for="nombreCompleto">Nombre completo quién reserva</label>
        <div class="col-sm-10">
               {{ text_field("nombreCompleto", "class" : "form-control required") }}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="email">E-mail</label>
        <div class="col-sm-10">
        	<input type="email" name="email" class="form-control" data-parsley-trigger="change" required />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="nombreElemento">Nombre elemento</label>
        <div class="col-sm-10">
               {{ text_field("nombreElemento", "class" : "form-control required") }}
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-2 control-label" for="observacion">Observación</label>
        <div class="col-sm-10">
               {{ text_field("observacion", "class" : "form-control required") }}
        </div>
    </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
          {{ submit_button("Guardar", "class" : "btn btn-default") }}
    </div>
</div>
</form>