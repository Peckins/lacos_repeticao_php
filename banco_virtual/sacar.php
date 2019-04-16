<meta charset="utf-8">
<link  rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link  rel="stylesheet" type="text/css" href="/css/result.css">

<?PHP
    $saque = $_POST['saque'];
    $saldo = $_POST['saldo'];
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
            <div class="jumbotron bg-success">
                <form action="/php/ex4.php" method="POST">
                    <h3 class="text-white">Sacar Dinheiro:</h3>
                    
                    <hr>
                    
                    <?PHP
                        $novoSaldo = $saldo - $saque;
                        echo "<input type='hidden' name='dinheiro' value='" . $novoSaldo . "'>";
                        echo "<p class='text-white'>Valor retirado: R$ " . $saque . ".</p>";
                    ?>
                    <input type="submit" class="btn btn-primary btn-block" value="OK">
                    
                </form>
            </div>
        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>