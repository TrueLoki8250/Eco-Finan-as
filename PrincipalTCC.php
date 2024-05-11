<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylePrincipal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/8a0118f486.js" crossorigin="anonymous"></script>
    <title>Controle Financeiro</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
        .w3-sidebar {
            width: 120px;
        }

        /* Define Fonte para todas as tags listadas abaixo */
        body, h1, h2, h3, h4, h5, h6 {
            font-family: "Montserrat", sans-serif;
        }
    </style>
</head>
<body class="w3-light-grey">
    <div class= "barra_lateral">
        <nav class="w3-sidebar w3-bar-block w3-center w3-green" id="sidebar">
            <a href="#inicio" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-green w3-text-light-grey" id="botao_inicio">
                <i class="far fa-chart-bar w3-xxlarge"></i>
                <p>Inicio</p>
            </a>
            <div>
            <a href="#ifinanceira" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-green w3-text-light-grey">
                <i class="far fa-address-card w3-xxlarge"></i>
                <p>Informação financeira</p>
            </a>
            <a href="#objetivo" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-green w3-text-light-grey">
                <i class="fas fa-balance-scale w3-xxlarge"></i>
                <p>Objetivo</p>
            </a>
            </div>
        </nav>
    </div>


    <div class="w3-padding-large" id="main">
        
    <!--Incial -->
    <header class="w3-container w3-padding-32 w3-center " id="inicio">
        <h1>
            <img src="img/logo2.jpeg" alt="Logo" class="w3-image" width="10%">
            </br>
        </h1>
        <br>
        <h1 class="w3-text-green">CONTROLE FINANCEIRO</h1>
    </header>

    <div class="board-principal">
    <div class="w3-padding-128 w3-text-green w3-card" id="Rfinanceiro">
        <h2 class="titulo_conteudo">
            <i class="fas fa-file-invoice-dollar w3-margin-right w3-5x"></i> Relatório Financeiro
        </h2>
        <ul id="lista_relatorio">
            <li><span class="placeholder">Nome:</span> <span id="nome">xxxx</span></li>
            <li><span class="placeholder">Ocupação:</span> <span id="ocupacao">xxxx</span></li>
            <li><span class="placeholder">Renda fixa:</span> <span id="renda_fixa">xxxx</span></li>
            <li><span class="placeholder">Renda extra:</span> <span id="renda_extra">xxxx</span></li>
            <li><span class="placeholder">Despesas previstas:</span> <span id="despesas_previstas">xxxx</span></li>
            <li><span class="placeholder">Despesas extras:</span> <span id="despesas_extras">xxxx</span></li>
            <li><span class="placeholder">saldo:</span> <span id="saldo">xxxx</span></li>
        </ul>
    </div>

    <div class="w3-padding-128 w3-text-green w3-card" id="objetivo">
        <h2 class="titulo_conteudo">
            <i class="fas fa-bullseye w3-margin-right w3-5x"></i> Objetivo
        </h2>
        <ul id="lista_objetivo">
            <li><span class="placeholder">Valor do objetivo:</span> <span id="valor_objetivo">xxxx</span></li>
            <li><span class="placeholder">Valor guardado:</span> <span id="valor_guardado">xxxx</span></li>
            <li><span class="placeholder">Progresso:</span> <span id="progresso">x%</span></li>
        </ul>
    </div>
</div>

    <!-- informações financeiras -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="ifinanceira">
    <h2 class="w3-text-green">Dados Pessoais</h2>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge far fa-grin-alt"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width: 11%;">
            <i class="w3-xxlarge fas fa-briefcase"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtOcupacao" type="text" placeholder="Ocupação" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-building"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtRenda" type="text" placeholder="Renda mensal" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-folder-open"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtRendaExtra" type="text" placeholder="Renda Extra" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-car-crash"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDespesasPrevistas" type="text" placeholder="Despesas Mensais" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-tools"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDespesasExtra" type="text" placeholder="Despesas Extra" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fab fa-angellist"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtTDRenda" type="text" placeholder="Tipo d/ renda" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-glass-cheers"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtTDDespesa" type="text" placeholder="Tipo D/ Despesas" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fab fa-avianex"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtTDDespesaExtra" type="text" placeholder="Tipo D/ Despesas Extra" value="">
        </div>
    </div>

    <div class="w3-center">
        <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-black w3-cell w3-round-large" style="width: 80%;">Atualizar</button>
    </div>
</div>

<!-- Obetivo -->
<div class="w3-padding-128 w3-content w3-text-grey" id="ifinanceira">
    <h2 class="w3-text-green">Objetivos</h2>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-piggy-bank"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtObetivo" type="text" placeholder="Objetivo" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-calendar-alt"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtdata" type="date" placeholder="" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-money-check-alt"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtVTObjetivo" type="text" placeholder="Valor Total" value="">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-hand-holding-usd"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtVGuardar" type="text" placeholder="Valor a Guardar Mensal" value="">
        </div>
    </div>

    <div class="w3-center">
        <button name="btnAdicionar" class="w3-button w3-block w3-margin w3-black w3-cell w3-round-large" style="width: 80%;">Adicionar</button>
    </div>
</div>


</body>
</html>
