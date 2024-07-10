		<div class="wrapper row3">
			<main class="hoc container clear">
				<!-- main body -->
				<div class="sectiontitle">
					<h6 class="heading">Ofertas del mes</h6>
					<p>Los pares más increíbles en oferta</p>
				</div>
				<ul class="nospace group overview">
					<?php
						foreach ($tennis_con_oferta as $tennis) {
							$precio_descuento = $tennis->precio-($tennis->precio*$tennis->descuento/100);
							echo '	<li class="one_third">
										<figure><a href="'.base_url('principal/'.$this->paginas->PAGINA_DETALLES_TENNIS.'/'.$tennis->id_tennis).'"><img src="'.base_url($this->constantes->IMG_DIR.$tennis->ruta_imagen).'" alt=""></a>
											<figcaption>
												<h6 class="heading">'.$tennis->marca.' '.$tennis->modelo.'</h6>
												<p>'.($tennis->genero==1 ? 'Mujer' : 'Hombre').'</p>
												<p>'.$tennis->color.'</p>
												
												<p>'.formato_moneda($precio_descuento).'</p>
											</figcaption>
										</figure>
									</li>';
						}//end foreach tennis con oferta
					?>
				</ul>
				<!-- / main body -->
				<div class="clear"></div>
			</main>
		</div>
