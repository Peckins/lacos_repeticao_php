<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/result.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/banco.js"></script>

<style type="text/css">
    span{
        background-color: lightblue;
        border-radius: 10px;
    }
    .jumbotron{
        background-color: forestgreen;
    }
</style>


<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <span class="border border-dark d-md-block p-3 bg-white">
                <h3>Saldo Atual:</h3>
                <?PHP
                    $saldo = $_POST['dinheiro'];

                    if ($saldo == null){
                        echo "<input type='number' class='form-control' name='saldo' value='0' id='saldo' readonly>";
                    }
                    else{
                        echo "<input type='number' class='form-control' name='saldo' value='" . $saldo . "' id='saldo' readonly>";
                    }
                
                ?>
            </span>
        </div>
    </div>
    
    <br>
    
    <div class="row">
        <div class="col-md-6">
            <span class="border border-dark d-md-block p-3 pt-5 bg-white">
                <h4>Depositar dinheiro</h4>
                <hr>
                <button class="btn btn-success" data-toggle="modal" data-target="#deposito">Depositar</button>
            </span>
        </div>
        
        <div class="col-md-6">
            <span class="border border-dark d-md-block p-3 pt-5 bg-white">
                <h4>Sacar dinheiro</h4>
                <hr>
                <button class="btn btn-success" data-toggle="modal" data-target="#sacar">Sacar</button>
            </span>
        </div>
    </div>
    
    <br>
    
    <div class="row">
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <span class="border border-dark d-md-block p-3 pt-5 bg-white text-center">
                <h4>Sair</h4>
                <hr>
                <button class="btn btn-danger" data-toggle="modal" data-target="#sair">Sair</button>
            </span>
        </div>
        
        <div class="col-md-4"></div>
    </div>
    
    <!--Janela de Depósito-->
    <div id="deposito" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title">Depositar Dinheiro</h4>
                    <button type="button" class="close float-right" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/banco_virtual/depositar.php" method="POST" id="depositar">
                        <div class="form-group text-center">
                            
                            <?PHP
                                echo "<input type='hidden' name='saldo' value='" . $saldo . "'>";
                            ?>
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Valor</span>
                                </div>
                                
                                <input type="number" step="any" class="form-control" name="deposito" id="valor" placeholder="Digite o valor desejado" required>
                            </div>
                            
                        </div>
                        
                        <input type="submit" class="btn btn-primary btn-block" value="Depositar">
                    </form>
                    
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Janela de Saque-->
    <div id="sacar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title">Sacar Dinheiro</h4>
                    <button type="button" class="close float-right" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/banco_virtual/sacar.php" method="POST" id="retirar">
                        <div class="form-group text-center">
                            
                            <?PHP
                                echo "<input type='hidden' name='saldo' value='" . $saldo . "'>";
                            ?>
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Valor</span>
                                </div>
                                
                                <input type="number" step="any" class="form-control" name="saque" id="saque" placeholder="Digite o valor desejado" required>
                            </div>
                            
                        </div>
                        
                        <input type="submit" class="btn btn-primary btn-block" value="Sacar">
                    </form>
                    
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Janela de Sair-->
    <div id="sair" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title">Sair</h4>
                    <button type="button" class="close float-right" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <h5>Tem certeza?</h5>
                </div>
                
                <div class="modal-footer">
                    <a class="btn btn-danger" href="/exercicios/ex1.html">Sim</a>
                    <button class="btn btn-primary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>

</div>