{{ content() }}
<h1>Reservas</h1>
{{ link_to("reserva/nuevo", '<i class="glyphicon glyphicon-plus"></i> Nueva reserva', "class": "btn btn-primary") }}
{% if (not(reservas is empty)) %}
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Elemento</th>
            <th>Observación</th>
            <th>Fecha y hora</th>
            <th>Eliminar</th>
         </tr>
    </thead>
    <tbody>
    {% for reserva in reservas %}
    	<tr>
	        <td>{{ reserva.id_reserva }}</td>
	        <td>{{ reserva.nombreElemento }}</td>
	        <td>{{ reserva.observacion }}</td>
	        <td>{{ reserva.getFechaDetail() }}</td>
	        <td class='centrar'><a href='eliminar/{{ reserva.id_reserva }}'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% endif %}