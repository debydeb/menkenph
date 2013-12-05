	<div class="main-container">
			
			<div class="submenu-m">
				<h1>Categorías</h1>
				<ul>
					<?php if(isset($menu)) : foreach($menu as $row) :?>
							<li><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
						<?php endforeach; ?>
					<?php endif; ?>
				<ul>
			</div>
			
			<!--Product Grid -- pg -->
			<div id="pg-container">
				<ul class="pg-grid">
					<?php if(isset($results)) : ?>
						<?php if ( count($results) > 0 ) : ?>
							<?php echo $this->pagination->create_links(); ?>
							<?php foreach($results as $row) :?>
								<li class="prod-single" id="<?php echo $row->ID?>">
									<div class="pg-content">
										<div class="pg-item">
											<div class="pg-image">
												<?php if ($row->imgUrl == "") : ?>
													<img src="<?php echo base_url() . 'img/noImg.jpg'; ?>" alt="No Image" />
												<?php else : ?>
													<img src="<?php echo base_url() . $row->imgUrl; ?>" alt="<?php echo $row->name; ?>" />
												<?php endif; ?>
											</div>
										</div>
									</div>
										
									<div class="pg-info">
										<h3><?php echo $row->name; ?></h3>
										<p class="pg-details"><strong>Detalle: </strong><?php  echo $row->detail; ?></p>
										<p class="pg-brand"><strong>Marca: </strong><?php  echo $row->brand; ?></p>
									</div>
								</li>
							<?php endforeach;?>
							
							<?php echo $this->pagination->create_links(); ?>
						</ul>
						</div>
						<?php else : ?>
							<h1 class="error">No se encontraron productos.</h1>
						<?php endif; ?>
					<?php else : ?>
						<h3>No se encontraron productos.</h3>
					<?php endif; ?>
				</ul>
			</div>
			<!--END Product Grid -- pg -->
	</div>