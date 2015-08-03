<?php 
	include("layout.php");
	
?>
      <div class="row">
        <div class="col s6 m6 offset-m3">
          <div class="card">
				<center>
					<label class="card-title grey-text text-darken-4">Registrar Candidato</label>
				</center>	
    			<form class="col s12 " method="post">
        			<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="firstName" type="text" class="validate" name="primer_nombre"  required >
          				<label for="firstName" data-error="wrong" data-success="right">Primer Nombre*</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="middleName" type="text" class="validate" name="segundo_nombre" length="15">
          				<label for="middleName" data-error="wrong" data-success="right">Segundo Nombre</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="lastName" type="text" class="validate" name="primer_apellido" required length="15">
          				<label for="lastName" data-error="wrong" data-success="right">Primer Apellido*</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-account-circle"></i>
          				<input id="secondLastName" type="text" class="validate" name="segundo_apellido" length="15">
          				<label for="secondLastName" data-error="wrong" data-success="right">Segundo Apellido</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-email"></i>
          				<input id="email" type="email" class="validate" name="email" required>
          				<label for="email" data-error="wrong" data-success="right">Email*</label>
					</div>
					<div class="input-field col s10 offset-s1">
         				<i class="prefix zmdi zmdi-email"></i>
          				<input id="confirmedEmail" type="email" class="validate"  required>
          				<label for="confirmedEmail" data-error="wrong" data-success="right">Confirmar Email*</label>
					</div>
	        		<div class="input-field col s10 offset-s1">
	          			<i class=" prefix zmdi zmdi-key"></i>
			          	<input id="password" type="password" class="validate" name="clave" required>
			         	<label for="password" data-error="wrong" data-success="right">Contraseña*</label>
      				</div>
				  	<div class="row"></div>
					  <div class="row">
						<div class="col s12">
							<div class="input-field col s10 offset-s1">			  
		          				<select name="tipo_documento" id="documentType">
							      <option value="cedula">Cédula</option>
							      <option value="pasaporte">Pasaporte</option>
							   	</select>
								<label for="documentType"><i class="zmdi zmdi-file-text zmdi-hc-1-5x" style="color: black;"></i> Tipo de Documento</label>	
							</div>
						</div>
					 </div>
			
					<div class="input-field col s10 offset-s1">
	          			<i class="prefix zmdi zmdi-account-box-mail"></i>
			          	<input id="identificationDocument" type="text" class="validate" name="documento_identidad" length="15" required>
			         	<label for="identificationDocument" data-error="wrong" data-success="right">Documento de Identificacón</label>
      				</div> 
					<div class="row"></div>
					<div class="row">
						<div class="input-field col s6 offset-s1">
		          			<i class="prefix zmdi zmdi-account-box-phone" for="homePhoneNumber"></i>
				          	<input id="homePhoneNumber" type="number" class="validate" name="telefono" required length="12">
				         	<label for="homePhoneNumber" data-error="wrong" data-success="right">Teléfono Residencial*</label>
						</div>
						<div class="col s4 checkbox-centered">
						 	<input type="checkbox" class="filled-in" id="showHomePhoneNumber" name="mostar_telefono" value="1" />
      						<label for="showHomePhoneNumber">Mostrar</label>
      					</div> 
					</div>
					<div class="row">
						<div class="input-field col s6 offset-s1">
		          			<i class="prefix zmdi zmdi-account-box-phone" for="homePhoneNumber"></i>
				          	<input id="homePhoneNumber" type="number" class="validate" name="celular" length="12" >
				         	<label for="homePhoneNumber" data-error="wrong" data-success="right">Celular</label>
						</div>
						<div class="col s4 checkbox-centered">
						 	<input type="checkbox" class="filled-in" id="showPhoneNumber" name="mostrar_celular" value="1" />
      						<label for="showPhoneNumber">Mostrar</label>
      					</div> 
					</div>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s10 offset-s1">			  
			          				<select name="sexo" required>
								      <option value="masculino">Masculino</option>
								      <option value="femenino">Femenino</option>
								   	</select>
									<label><i class="zmdi zmdi-male-female zmdi-hc-1-5x" style="color: black;"></i> Sexo*</label>	
								</div>
							</div>
						</div>
						<div class="input-field col s10 offset-s1">
		          			<i class="prefix zmdi zmdi-account-box-mail"></i>
				          	<input id="address" type="text" class="validate" name="direccion" length="55">
				         	<label for="address" data-error="wrong" data-success="right">Dirección</label>
	      				</div>
						<div class="input-field col s10 offset-s1">
	          				<i class="prefix zmdi zmdi-account-box-mail"></i>
			          		<input id="city" type="text" class="validate" name="ciudad" length="25" required>
			         		<label for="city" data-error="wrong" data-success="right">Ciudad</label>
      					</div>
						<div class="input-field col s10 offset-s1">
		          			<i class="prefix zmdi zmdi-account-box-mail"></i>
				          	<input id="country" type="text" class="validate" name="pais" length="55">
				         	<label for="country" data-error="wrong" data-success="right">País</label>
	      				</div>  
						<div class="row">
							 <div class="input-field col s7 offset-s1">
				          		<input type="checkbox" class="filled-in" id="drive-licence" name="licencia_conducir" value="si"/>
	      						<label for="drive-licence">Lincecia de conducir</label>
								<input type="checkbox" class="filled-in" id="workOnAnotherCity" name="disponibilidad_trap_otra_ciudad"  value="si"/>
	      						<label for="workOnAnotherCity">Disponibilidad para trabajar en otra ciudad</label>
								<input type="checkbox" class="filled-in" id="workOnAnotherCountry" name="disponibilidad_trap_otro_pais" value="si" />
	      						<label for="workOnAnotherCountry">Disponibilidad para trabajar en otro país</label>
							 </div>
							 <div class="col s4 checkbox-centered">
							 	<input type="checkbox" class="filled-in" id="visa" name="visa" value="si" />
	      						<label for="visa">Visa</label>
							 </div>
	        			</div>
						<div class="row">
							<div class="input-field col s6 offset-s1">
			          			<i class="prefix zmdi zmdi-cake"></i>
					          	<input id="birthday" type="date" class="datepicker" name="fecha_nac" >
					         	<label for="birthday" data-error="wrong" data-success="right">Fehca de Nacimiento</label>
							</div>
							<div class="col s4 checkbox-centered">
							 	<input type="checkbox" class="filled-in" id="showBirthday" name="mostrar_fecha_nac"  />
	      						<label for="showBirthday">Mostrar</label>
	      					</div> 
						</div>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s10 offset-s1">			  
			          				<select name="estado_civil">
									      <option value="soltero">Soltero</option>
									      <option value="casado">Casado</option>
										  <option value="divorciado">Divorciado</option>
									      <option value="union_libre">Union Libre</option>
								   	</select>
									<label><i class="zmdi zmdi-accounts-outline zmdi-hc-1-5x" style="color: black;"></i> Estdo Civil</label>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s10 offset-s1">			  
			          				<select name="nivel_studio" required>
									      <option value="termino">Término</option>
									      <option value="tec_superior">Tecnólogo Superior</option>
										  <option value="grado">Grado</option>
									      <option value="postgrado">PostGrado</option>
									      <option value="maestria">Maestría</option>
									      <option value="doctorado">Doctorado</option>
								   	</select>
									<label><i class="zmdi zmdi-graduation-cap zmdi-hc-1-5x" style="color: black;"></i> Nivel de Estudio*</label>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s10 offset-s1">			  
			          				<select name="situacion_laboral">
									      <option value="desempleado">Desmpleado</option>
									      <option value="empleado">Empleado</option>
										  <option value="independiente">Independiente</option>
								   	</select>
									<label><i class="zmdi zmdi-developer-board zmdi-hc-1-5x" style="color: black;"></i> Situación Laboral</label>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s10 offset-s1">			  
			          				<select name="exp_laboral">
									      <option value="ninguna">Ninguna</option>
									      <option value="menos3_meses">Menos de 3 meses</option>
										  <option value="3_12_meses">3 a 12 Meses</option>
										  <option value="mas_1_ano">Más de 1 año</option>
								   	</select>
									<label><i class="zmdi zmdi-developer-board zmdi-hc-1-5x" style="color: black;"></i> Experiencia Laboral</label>	
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s10 offset-s1">			  
			          				<select name="contrato_deseado">
									      <option value="fijo">Fijo</option>
									      <option value="temporal">Temporal</option>
										  <option value="pasantia">Pasantía</option>
										  <option value="freelance">Freelancer</option>
								   	</select>
									<label><i class="zmdi zmdi zmdi-file zmdi-hc-1-5x" style="color: black;"></i> Contrato Deseado</label>	
								</div>
							</div>
						</div>
						<div class="row">
							<center>
							<label><h5>Conocimientos de Informática</h5></label>
							</center>
							 <div class="input-field col s4 offset-s1">
								 
				          		<input type="checkbox" class="filled-in" id="internet" name="internet" value="si"/>
	      						<label for="internet">Internet</label>
								<input type="checkbox" class="filled-in" id="access" name="acces" value="si"/>
	      						<label for="access">Access</label>
								<input type="checkbox" class="filled-in" id="word" name="word" value="si"/>
	      						<label for="word">  Word</label>
								<input type="checkbox" class="filled-in" id="publisher" name="publisher" value="si"/>
	      						<label for="publisher">Publisher</label>
								<input type="checkbox" class="filled-in" id="excel" name="excel" value="si"/>
	      						<label for="excel">Excel</label>
								<input type="checkbox" class="filled-in" id="lotus" name="lotus" value="si"/>
	      						<label for="lotus">Lotus</label>
							 </div>
							 <div class="col s4 checkbox-centered">
							 	<input type="checkbox" class="filled-in" id="power_point" name="power_point" value="si" />
	      						<label for="power_point">Power Point</label>
								<input type="checkbox" class="filled-in" id="lotus" name="lotus" value="si"/>
	      						<label for="lotus">Lotus</label>
							 </div>
	        			</div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						<div class="row"></div>
						
            			<div class="row">
							<div class="col s10 offset-s2">
     							<button class="btn blue waves-effect waves-light" type="submit">Enviar <i class="zmdi zmdi-mail-send"></i></button>
     							<button class="btn red waves-effect waves-light" type="reset">Limpiar <i class="zmdi zmdi-format-clear-all"></i></button>
							</div>
						</div>	
    			</form>
          </div>
        </div>
      </div>