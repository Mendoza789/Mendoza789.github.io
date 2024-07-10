		<div class="wrapper row3">
			<main class="hoc container clear">
				<!-- main body -->
				<!-- ################################################################################################ -->
				<div class="content">
					<!-- ################################################################################################ -->
					<div id="gallery">
						<figure>
							<header class="heading">Nuestros pares</header>
							<ul class="nospace clear">
								<?php
									$counter=0;
									foreach ($imagenes_tennis as $imagen) {
										if($counter%4 == 0){
											echo '<li class="one_quarter first"><img src="'.base_url($this->constantes->IMG_DIR.$imagen->ruta_imagen).'" alt=""></li>';
										}//en if es un inicio de fila
										else{
											echo '<li class="one_quarter"><img src="'.base_url($this->constantes->IMG_DIR.$imagen->ruta_imagen).'" alt=""></li>';
										}//end else elementos después del primero de la fila
										$counter++;
									}//end while
								?>
							</ul>
							<!--figcaption>Gallery Description Goes Here</figcaption-->
						</figure>
					</div>
					<!-- ################################################################################################ -->
					<!-- ################################################################################################ -->
					<!--nav class="pagination">
						<ul>
							<li><a href="#">&laquo; Previous</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><strong>&hellip;</strong></li>
							<li><a href="#">6</a></li>
							<li class="current"><strong>7</strong></li>
							<li><a href="#">8</a></li>
							<li><a href="#">9</a></li>
							<li><strong>&hellip;</strong></li>
							<li><a href="#">14</a></li>
							<li><a href="#">15</a></li>
							<li><a href="#">Next &raquo;</a></li>
						</ul>
					</nav-->
				<!-- ################################################################################################ -->
				</div>
				<!-- ################################################################################################ -->
				<!-- / main body -->
				<div class="clear"></div>
			</main>
		</div>
