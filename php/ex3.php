<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/result.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
            <div class="jumbotron bg-success text-center">
                

                <h3 class="text-white">Resultado</h3>
                
                <hr>
                
                <div class="card result scrollbar-sunny-morning bg-primary">
                    <div class="card-body">
                
                        <?PHP
                            $n = $_POST['numero'];
                            
                            if ($n > 0){
                                if (($n % 1 == 0) && ($n % $n == 0)){
                                    echo "<p class='text-white'>O número " . $n . " é um número primo.</p>";
                                }
                                else{
                                    echo "<p class='text-center'>" . $n . "não é um número primo.</p>";
                                }
                            }
                            else{
                                echo "<p class='text-white'>Não pode dividir</p>";
                            }
                        ?>
                    </div>    
                </div>    
                
                <hr>
                
                <a class="btn btn-secondary mb-0" href="/index.html">Menu Principal</a>
                    
            </div>    
        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>