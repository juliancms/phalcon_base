{{ content() }}

<h1>Nueva Reserva</h1>

{{ form("reserva/guardar/", "method":"post", "class":"form-container form-horizontal", "parsley-validate" : "") }}
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