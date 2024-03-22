<!DOCTYPE html>
<html>
<head>
    <title>Eldrion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Eldrion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">História<span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Suporte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forum</a>
            </li>                        
            <li class="nav-item">
                <a class="nav-link" href="classes.php">Classes</a>
            </li>
            </ul>
        </div>
        </nav>
        <br>
        <img src="img/img.png" class="img-fluid mb-3" alt="Cabeçalho do Jogo">
        <div>
            <?php
                $historia = file_get_contents("../arq/historia_jogo.html");
                echo $historia;
            ?>
        </div>
        <footer class="text-muted navbar-dark bg-dark">
            <div class="container">
                <p class="p-4">&copy; Eldrion -Todos os direitos Reservados - 2024 </p>
            </div>
        </footer> 
    </div>   
</body>
</html>
