<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <div class="sectiontitle">
            <h6 class="heading">Los mejores pares para mujeres con actitud</h6>
            <p>Siempre hay uno para ti, para tu estilo, para tu ritmo de vida</p>
        </div>
        <ul class="nospace group overview">
            <?php foreach ($tennis_dama as $tennis) : ?>
                <li class="one_third">
                    <figure>
                        <a href="<?= base_url('principal/'.$this->paginas->PAGINA_DETALLES_TENNIS.'/'.$tennis->id_tennis) ?>">
                            <img src="<?= base_url($this->constantes->IMG_DIR.$tennis->ruta_imagen) ?>" alt="">
                        </a>
                        <figcaption>
                            <h6 class="heading"><?= $tennis->marca.' '.$tennis->modelo ?></h6>
                            <p><?= $tennis->color ?></p>
                            <?php
                                // Calcular precio con descuento
                                $precio_descuento = $tennis->precio - ($tennis->precio * $tennis->descuento / 100);
                            ?>
                            <p><?= formato_moneda($precio_descuento) ?></p>
                        </figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
