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
                

                <h3 class="text-white">Multiplicação:</h3>
                
                <hr>
                
                <div class="card result scrollbar-sunny-morning bg-primary">
                    <div class="card-body">
                
                        <?PHP
                            $n = $_POST['numero'];
                            $mult = $_POST['multiplicador'];

                            echo "<h5 class='text-white'>Resultado da multiplicação de " . $n . " x " . $mult .":</h5>";
                            
                            $laco = 1;
                            $result = $n;
                            while ($laco < $mult){
                                $result += $n;
                                $laco++;
                            }
                            echo "<p class='text-white'>" . $result ."</p>";
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