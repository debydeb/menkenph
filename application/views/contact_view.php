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
				echo form_open('contact/send', $attributes);
				
					$data1 = array(
									'type'        => 'text',
									'name'        => 'name',
									'id'          => 'name',
									'placeholder' => 'Nombre...',
									'class'       => 'form-control',
                                                                        'value'       => ''
								 );
					$data2 = array(
									'type'        => 'text',
									'name'        => 'lstname',
									'id'          => 'lstname',
									'placeholder' => 'Apellido...',
									'class'       => 'form-control',
                                                                        'value'       => ''
								 );								 
					$data3 = array(
									'type'        => 'text',
									'name'        => 'phone',
									'id'          => 'phone',
									'placeholder' => 'Telefono...',
									'class'       => 'form-control',
                                                                        'value'       => ''
								 );								 
					$data4 = array(
									'type'        => 'email',
									'name'        => 'email',
									'id'          => 'email',
									'placeholder' => 'E-mail...',
									'class'       => 'form-control',
                                                                        'value'       => ''
								 );								 
					$data5 = array(
									'name'        => 'msj',
									'id'          => 'msj',
									'placeholder' => 'Escriba su mensaje...',
									'class'       => 'form-control',
									'rows' 		  => '10',
                                                                        'value'       => ''
								);	
					$data6 = array(
									'name'        => 'Enviar',
									'value'       => 'Enviar',
									'class'       => 'btn btn-primary',
								);				
					echo '<div class="form-group"><label for="name">Nombre</label>'.form_input($data1).'</div>';
					echo '<div class="form-group"><label for="lstname">Apellido</label>'.form_input($data2).'</div>';
					echo '<div class="form-group"><label for="phone">Telefono</label>'.form_input($data3).'</div>';
					echo '<div class="form-group"><label for="email">E-mail</label>'.form_input($data4).'</div>';
					echo '<div class="form-group"><label for="msj">Mensaje</label>'.form_textarea($data5).'</div>';
					
					echo form_submit($data6);
					
				echo form_close();	
			?>
		</div>
	</div>
</div>