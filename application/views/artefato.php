<div class="w3-container">
    <!-- Nome do artefato -->
    <div class="w3-row">
        <h1><b><?= $nomeArtefato ?></b></h1>
    </div>

    <!-- Virtualização do artefato -->
    <div class="w3-row w3-margin-top">
        <div class="w3-rest">
            <div id="artefato" style="height: 500px;"></div>
        </div>
    </div>

    <!-- Descrição completa do artefato -->
    <div class="w3-row w3-margin-top">
        <h2>Descrição do artefato</h2>
        <?= $complDesc ?>
    </div>

    <!-- Imagens do artefato -->
<?php if($pictures->num_rows() > 0) { ?>
    <div class="w3-row w3-margin-top">
        <h2>Imagens</h2>
        <div class="w3-panel w3-white w3-card w3-round" id="imagens">
<?php
        $cont = 0;
        foreach ($pictures->result() as $pic) {
            if($cont == 0) {
?>
            <div class="w3-row w3-margin-top">
<?php       } ?>
                <div class="w3-third w3-container">
                    <img src="<?= base_url('assets/imagens/artefatos/' . $pic->nomeImagem)?>" alt="<?= $pic->nomeImagem ?>" class="w3-image w3-hover-opacity">
                </div>
<?php
            if(++$cont == 3) {
                $cont = 0;
?>
            </div>
<?php       } ?>
<?php   } ?>
            <div class="w3-margin-bottom"></div>
        </div>
    </div>
<?php } ?>

    <!-- Origem do artefato -->
    <div class="w3-row w3-margin-top w3-margin-bottom">
        <h2>Origem do artefato</h2>
        <div id="map">
            <!-- Here goes the map -->
        </div>
    </div>
</div>
