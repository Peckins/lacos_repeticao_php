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
                

                <h3 class="text-white">Fatorial de um número:</h3>
                
                <hr>
                
                <div class="card result scrollbar-sunny-morning bg-primary">
                    <div class="card-body">
                
                        <?PHP
                            $n = $_POST['numero'];
                            $fatorial = $n--;

                            echo "<h5 class='text-white'>Fatorial do número " . $n . ":</h5>";
                            
                            for ($n = $n; $n > 1; $n--){
                                $fatorial *= $n;
                            }
                            echo "<p class='text-white'>" . $fatorial ."</p>"
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