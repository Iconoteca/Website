<div class="w3-container">
    <!-- Nome do artefato -->
    <div class="w3-row">
        <h1><b><?= $nomeArtefato ?></b></h1>
    </div>

    <!-- Virtualização do artefato -->
    <div class="w3-row w3-margin-top">
        <div id="artefato" style="height: 500px;"></div>
    </div>

    <!-- Descrição completa do artefato -->
    <div class="w3-row w3-margin-top">
        <h2>Descrição do artefato</h2>
        <?= $complDesc ?>
    </div>

    <!-- Imagens do artefato -->
    <div class="w3-row w3-margin-top">
        <div class="w3-container w3-teal">
            <p>Here is going to have the pictures</p>
        </div>
    </div>

    <!-- Origem do artefato -->
    <div class="w3-row w3-margin-top w3-margin-bottom">
        <h2>Origem do artefato</h2>
        <div id="map">
            <!-- Here goes the map -->
        </div>
    </div>
</div>
