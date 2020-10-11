<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: ../index.php");
}

?>

<?php
 include("config.php");
 extract($_SESSION); 
		  $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
		$stmt_edit->execute(array(':user_email'=>$user_email));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
		
		<?php
 include("config.php");
		  $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
		$stmt_edit->execute(array(':user_id'=>$user_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OKULAR Shop</title>
	 <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">OKULAR Shop</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"> &nbsp; <span class='glyphicon glyphicon-home'></span> Główna</a></li>
					<li><a href="shop.php?id=1"> &nbsp; <span class='glyphicon glyphicon-shopping-cart'></span> Sklep</a></li>
					<li><a href="cart_items.php"> &nbsp; <span class='fa fa-cart-plus'></span> Koszyk</a></li>
					<li><a href="orders.php"> &nbsp; <span class='glyphicon glyphicon-list-alt'></span> Moje Zamówienie</a></li>
					<li><a href="view_purchased.php"> &nbsp; <span class='glyphicon glyphicon-eye-open'></span> Poprzednie Zamówienia</a></li>
					<li><a data-toggle="modal" data-target="#setAccount"> &nbsp; <span class='fa fa-gear'></span> Ustawienia Konta</a></li>
					<li><a href="logout.php"> &nbsp; <span class='glyphicon glyphicon-off'></span> Wyloguj</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('d.m.y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
					<li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-shopping-cart'></span> Wartość Zamówienia: &#8369; <?php echo $total; ?> </b></a>
                       
                    </li>
					
					
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user_email; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="modal" data-target="#setAccount"><i class="fa fa-gear"></i> Ustawienia</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-power-off"></i> Wyloguj</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
			
			
			<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                    <li data-target="#my-carousel" data-slide-to="2"></li>
                    <li data-target="#my-carousel" data-slide-to="3"></li>
                    <li data-target="#my-carousel" data-slide-to="4"></li>
                    <li data-target="#my-carousel" data-slide-to="5"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">

                        <img src="../assets/img/1-slide.jpg" alt="Hero Slide" style="width:100%;height:500px;">

                        <div class="carousel-caption">
                            <h1 style="font-family:Century Gothic"><b></b></h1>

                            <h2></h2>
                        </div>
                    </div>

        <div class="item">
            <img src="../assets/img/2-slide.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/3-slide.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/4-slide.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/5-slide.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/6-slide.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
	
      <span class="icon-prev"></span>
       
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
       
       <span class="icon-next"></span>
    </a>


			</div>

		<br />	
			 <div class="alert alert-info">

                     &nbsp; &nbsp; WItaj w OKULAR Shop! Znjadziesz u nas szeroką gamę produktów okularów. Specjalizujemy się w klasycznych okularach przeciwsłonecznym.
                     Jesteśmy sprawdzonym sklepem działającym już od 2000 roku, więc nie ma ryzyka robiąc u nas zakupy. Polecamy również zapoznać się z naszymi opiniami.
                    </div>
					<br />
			
			<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy 2020 OKULAR Shop | Wszystkie Prawa Zastrzeżone |  Autor  : Błażej Woźniak

						</p>
                        
                    </div>
            
                </div>
            </div>
        </div>
    </div>

	
        <div class="modal fade" id="setAccount" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Ustawienia Konta</h2>
              </div>
              <div class="modal-body">

				
				 <form enctype="multipart/form-data" method="post" action="settings.php">
                   <fieldset>
					

                            <p>Imię:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Imię"" name="user_firstname" type="text" value="<?php  echo $user_firstname; ?>" required>
							 
							</div>
							
							
							<p>Nazwisko:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Nazwisko" name="user_lastname" type="text" value="<?php  echo $user_lastname; ?>" required>
							 
							</div>
							
							<p>Adres:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Adres" name="user_address" type="text" value="<?php  echo $user_address; ?>" required>

							</div>
							
							<p>Hasło:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Hasło" name="user_password" type="password" value="<?php  echo $user_password; ?>" required>

							</div>
							
							<div class="form-group">
							
                                <input class="form-control hide" name="user_id" type="text" value="<?php  echo $user_id; ?>" required>

							</div>

					 </fieldset>

              </div>
              <div class="modal-footer">
               
                <button class="btn btn-block btn-success btn-md" name="user_save">Zapisz</button>
				
				 <button type="button" class="btn btn-block btn-danger btn-md" data-dismiss="modal">Anuluj</button>
				
				   </form>
              </div>
            </div>
          </div>
        </div>
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
