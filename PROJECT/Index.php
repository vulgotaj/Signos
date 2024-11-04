<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <h1>Veja qual seu signo</h1>

    <form id="signo-form"  method="POST" action="show_zodiac_sign.php">

        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Insira sua data de nascimento</label> <br>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>

        <button type="submit" class="btn btn-primary">Revelar signo!</button>

    </form>
</div>

<?php include('layouts/footer.php'); ?>