<!-- Header -->
<header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
        <h1><b>Portfolio</b></h1>
<?php if($icones->num_rows() > 0) { ?>
        <div class="w3-section w3-bottombar w3-padding-16">
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
<?php } ?>
    </div>
</header>

<div id="portfolio-grid">
<?php if($icones->num_rows() == 0) { ?>
    <div class="w3-row-padding">
        <div class="w3-container w3-margin-bottom">
            <h2><b>Nenhum artefato encontrado.</b></h2>
        </div>
    </div>
<?php
    } else {
        $cont = 0;
        foreach ($icones->result() as $icone) {
            if($cont == 0) {
?>
        <div class="w3-row-padding">
<?php       } ?>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="<?= base_url('assets/images/figure/') . $icone->figure ?>" alt="Artefato <?= $icone->idArtefato ?>" style="width: 100%" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b><?= $icone->nome ?></b></p>
                    <p><?= $icone->shortDesc ?></p>
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
    <div class="w3-bar">
        <?= $this->pagination->create_links(); ?>
    </div>
</div>

<!-- About -->
<div class="w3-container w3-padding-large" style="margin-bottom:32px" id="about">
    <h4><b>Sobre</b></h4>
    <p>Descrição do projeto. Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
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
