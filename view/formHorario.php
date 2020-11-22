<?php
include('../includes/navbar.php')
?>

<style>
    .container {
        background: #ffffff;
        width: 40%;
        margin-bottom: 20px;
    }

    h1,
    label {
        color: #0094cf;
        font-family: 'Signika', sans-serif;
    }

    .margin {
        margin-bottom: 10px;
    }
</style>

<div class="row">

    <div class="col-md-5 offset-md-1">
        <div class="container">
            <h1>Adicionar horários</h1>
            <h4>Nome:</h4>
            <h2>Dr. João Augusto de Alcântara</h2>

            <div class="form-group">
                <label for="">Data e Hora</label>
                <input type="text" placeholder="dd-mm-yyyy       hh:mm" name="dataHora">
            </div>
        </div>
    </div>

    <div class="col-md-5 offset-md-1">
        <div class="container">
            <h1>Horários configurados</h1>
            <br>

            <div class="row">
                <h4>16/11/2020 07:00</h4>

                <a href="">Remover</a>
            </div>

        </div>
    </div>

</div>

<?php
include('../includes/footer.php')
?>