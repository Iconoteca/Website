<!-- Header -->
<header id="portfolio">
    <div class="w3-container">
        <h1><b>Portfolio</b></h1>
<?php if($artefatos->num_rows() > 0) { ?>
        <div class="w3-section w3-bottombar w3-padding-16">
            <div class="w3-row">
                <?php
                    $class = ($categoria == null) ? "w3-black" : "w3-white";
                    echo anchor("", "TODOS", array('class' => "w3-button $class"));

                    foreach ($categorias->result() as $c)
                    {
                        $class = ($categoria == $c->nomeURL) ? "w3-black" : "w3-white";
                        echo anchor("$c->nomeURL/", "$c->nomeCategoria", array('class' => "w3-button $class"));
                    }
                ?>
            </div>
        </div>
<?php } ?>
    </div>
</header>

<div id="portfolio-grid">
    <?php if($artefatos->num_rows() == 0) { ?>
        <div class="w3-row-padding">
            <div class="w3-container w3-margin-bottom">
                <h2><b>Nenhum artefato encontrado.</b></h2>
            </div>
        </div>
    <?php
        } else {
            $cont = 0;
            foreach ($artefatos->result() as $artefato) {
                if($cont == 0) {
    ?>
            <div class="w3-row-padding">
    <?php       } ?>
                <div class="w3-third w3-container w3-margin-bottom">
                    <a href="<?= base_url('artefato/') . $artefato->idArtefato ?>">
                        <img src="<?= base_url('assets/imagens/figuras/') . $artefato->figure ?>" alt="Artefato <?= $artefato->idArtefato ?>" style="width: 100%" class="w3-hover-opacity"/>
                    </a>
                    <div class="w3-container w3-white">
                        <p><b><?= $artefato->nome ?></b></p>
                        <p><?= $artefato->shortDesc ?></p>
                    </div>
                </div>
    <?php
                if(++$cont == 3) {
                    $cont = 0;
    ?>
            </div>
    <?php
                }
            }
        }
    ?>
</div>

<!-- Pagination -->
<div class="w3-center w3-padding-32">
    <div class="w3-bar w3-border w3-large">
        <?= $this->pagination->create_links(); ?>
    </div>
</div>

<!-- About -->
<div class="w3-container w3-padding-large" style="margin-bottom:32px" id="about">
    <h4><b>Sobre</b></h4>
    <p style="text-align: justify;">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Maecenas facilisis ipsum sit amet augue dapibus finibus. Nunc nec purus erat. Vivamus facilisis molestie metus quis ornare. Ut vel turpis dolor. Nulla ipsum nunc, pulvinar eget libero et, dictum euismod lorem. Duis sodales, erat non lobortis ullamcorper, orci odio lobortis sapien, in dictum tortor erat ac tellus. Quisque non porta arcu. Integer tincidunt nisl vitae sollicitudin pretium. Vestibulum et viverra lorem, ac tempor ex. Cras sagittis pellentesque urna quis vulputate. Suspendisse nec odio posuere, tristique sem mattis, vestibulum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p style="text-align: justify;">Vestibulum et metus non odio semper laoreet id nec justo. Vestibulum non augue dictum, consequat dui quis, gravida nisi. Curabitur condimentum nisi lobortis ipsum eleifend mattis. Fusce efficitur leo ut nulla consectetur, vel vestibulum erat auctor. Cras tempus in nunc et egestas. Proin efficitur ligula a eros cursus pellentesque. Fusce dignissim commodo dolor in eleifend. Quisque vitae facilisis risus. <strong>Aenean et eleifend nunc. Maecenas pretium purus eget egestas efficitur.</strong> Nam malesuada ut lacus condimentum facilisis. Fusce luctus purus lectus, in rutrum eros fringilla at. Donec rhoncus quis ipsum congue egestas.</p>
    <p style="text-align: justify;">Sed semper, felis sed aliquet molestie, nulla quam rutrum lectus, lacinia elementum sapien lectus in arcu. Vivamus eleifend quam quam, in bibendum enim ultrices ac. In hac habitasse platea dictumst. Morbi vel finibus ligula, nec cursus lacus. Cras lacus diam, <strong>sodales non massa sollicitudin</strong>, congue mollis justo. Aliquam laoreet hendrerit tellus, sed rutrum massa mattis vel. Proin molestie cursus sapien, nec blandit lorem finibus sit amet. Aliquam erat volutpat. Nunc sit amet augue in nisl molestie ultrices quis a velit. <strong>Mauris cursus scelerisque venenatis.</strong> Etiam tristique elementum orci, cursus cursus tellus convallis blandit. Nunc vulputate, mi a mattis semper, massa elit fringilla nunc, in congue risus lorem sit amet mi. <strong>Duis maximus</strong> purus vel risus sodales aliquet. Integer arcu nunc, malesuada vitae vestibulum non, fringilla non ipsum. Aliquam vehicula, nunc vitae sagittis tincidunt, nibh purus feugiat risus, eget commodo erat elit vitae nunc.</p>
</div>

<!-- Contact Section -->
<div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contato</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
        <div class="w3-third w3-dark-grey">
            <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
            <p>158943@upf.br</p>
        </div>
        <div class="w3-third w3-teal">
            <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
            <p>Passo Fundo, RS</p>
        </div>
        <div class="w3-third w3-dark-grey">
            <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
            <p>(54) 3316-5804</p>
        </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
        <div class="w3-section">
            <label>Nome</label>
            <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
            <label>E-mail</label>
            <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-section">
            <label>Mensagem</label>
            <!-- <input class="w3-input w3-border" type="text" name="Message" required> -->
            <textarea class="w3-input w3-border" type="text" name="Message" required></textarea>
        </div>
        <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Enviar mensagem</button>
    </form>
</div>
