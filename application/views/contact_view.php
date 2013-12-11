<div class="container">
	<div id="contact">
		<div id="contactInfo">
			<h1 class="heading">Contactenos</h1>
			<p>Cont&aacute;ctenos a trav&eacute;s de nuestro formulario, le responderemos a la brevedad. Adem&aacute;s por este medio tambi&eacute;n puede realizar el pedido de nuestros productos.
				<br/>Le recomendamos proporcionar datos ver&iacute;dicos a fin de poder contactarnos con usted.</p>
		</div>
		<div id="contactForm">
			<?php
				$this->load->helper('form');

				$attributes = array('role' => 'form', 'id' => 'myform');

				echo form_open('contact', $attributes);

					$firstName = array(
						'type'        => 'text',
						'name'        => 'name',
						'id'          => 'name',
						'placeholder' => 'Nombre...',
						'class'       => 'form-control',
						'value'       => set_value('name')
					);
					$lastName = array(
						'type'        => 'text',
						'name'        => 'lstname',
						'id'          => 'lstname',
						'placeholder' => 'Apellido...',
						'class'       => 'form-control',
						'value'       => set_value('lstname')
								 );
					$phone = array(
						'type'        => 'text',
						'name'        => 'phone',
						'id'          => 'phone',
						'placeholder' => 'Telefono...',
						'class'       => 'form-control',
						'value'       => set_value('phone')
					);
					$mail = array(
						'type'        => 'email',
						'name'        => 'email',
						'id'          => 'email',
						'placeholder' => 'E-mail...',
						'class'       => 'form-control',
						'value'       => set_value('email')
					);
					$message = array(
						'name'        => 'msj',
						'id'          => 'msj',
						'placeholder' => 'Escriba su mensaje...',
						'class'       => 'form-control',
						'rows' 		  => '10',
						'value'       => set_value('msj')
					);
					$submit = array(
						'name'        => 'Enviar',
						'value'       => 'Enviar',
						'class'       => 'btn btn-primary'
					);
					echo form_error('name', '<p class="formError">*', '</p>');
					echo '<div class="form-group"><label for="name">Nombre</label>'.form_input($firstName).'</div>';
					echo form_error('lstname', '<p class="formError">*', '</p>');
					echo '<div class="form-group"><label for="lstname">Apellido</label>'.form_input($lastName).'</div>';
					echo form_error('phone', '<p class="formError">*', '</p>');
					echo '<div class="form-group"><label for="phone">Telefono</label>'.form_input($phone).'</div>';
					echo form_error('email', '<p class="formError">*', '</p>');
					echo '<div class="form-group"><label for="email">E-mail</label>'.form_input($mail).'</div>';
					echo form_error('msj', '<p class="formError">*', '</p>');
					echo '<div class="form-group"><label for="msj">Mensaje</label>'.form_textarea($message).'</div>';

					echo form_submit($submit);

				echo form_close();
			?>
		</div>
	</div>
</div>