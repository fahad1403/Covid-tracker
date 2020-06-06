<?php

    include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="world.png"/>
    <title>Covid-19 Tracker</title>
</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php" style="font-size: 28px;">Tracker</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
		  <ul class="navbar-nav mr-auto">
			<li class="nav-item active">
			  <a class="nav-link" href="precautions.php" style="font-size: 23px;"> Precautions <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#"  style="font-size: 23px;"> Contact </a>
			</li>
		  </ul>
		</div>
	  </nav>
    
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
        <h5 class="text-muted">A project to keep track of all the COVID-19 cases around the world.</h5>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed;?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered;?>
            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths;?>
            </div>
        </div>
    </div>

<!-- Search box

<div class="container">
<div class="input-group md-form form-sm form-1 pl-0">
  <div class="input-group-prepend">
    <span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-white"
        aria-hidden="true"></i></span>
  </div>
  <input class="form-control my-0 py-1" type="text" id="search" placeholder="Search" aria-label="Search">
</div>
</div>
<br>
-->

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deaths</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $key => $value){
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>    
                            </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                            <td><?php echo $value[$days_count]['deaths'];?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, <a href="https://fahadpatel.netlify.app/" target="_blank">Fahad Patel</a></span>
        </div>
    </footer>

</body>
</html>
