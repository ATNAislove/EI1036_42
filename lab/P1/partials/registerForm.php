<main>
	<h1>Gestión de Usuarios </h1>
	<form class="fom_usuario" action="?action=registrar" method="POST">

		<legend>Datos básicos</legend>
		<label for="nombre">Nombre</label>
		<br/>
		<input type="text" name="name" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Miguel" />
		<br/>
		<label for="surname">Apellido</label>
		<br/>
		<input type="text" name="surname" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Cervantes" />
		<br/>
		<label for="address">Email</label>
		<br/>
		<input type="text" name="address" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="kiko@ic.es" />
		<br/>
		<label for="city">Ciudad</label>
		<br/>
		<input type="text" name="city" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="Castellon" />
		<br/>
		<label for="zip_code">Código postal</label>
		<br/>
		<input type="number" name="zip_code" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="12540" />
		<br/>
		<label for="foto_file">Foto</label>
		<br/>
		<input type="url" name="foto_file" class="item_requerid" size="20" maxlength="25" value=""
		 placeholder="http:www.google.es" />
		<br/>
		<p><input type="submit" value="Enviar">
		<input type="reset" value="Deshacer">
		</p>
	</form>
</main>