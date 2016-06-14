<?php
	$date = date('d.m.Y');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Le soufflot</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/queries.css">
	<link rel="stylesheet" href="lib/datetimepicker/jquery.datetimepicker.css">
	<link rel="stylesheet" href="lib/fancybox/source/jquery.fancybox.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="lib/datetimepicker/build/jquery.datetimepicker.full.js"></script>
	<script src="lib/bootstrap/js/bootstrap.js"></script>
	<script src="lib/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="lib/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
</head>
<body>
<script type="text/javascript">
$(document).ready(function () {
	var lol = window.innerWidth;

	if ( 950 > lol) {
		var height = lol*0.17;
	}
	
	else if (800 < lol <1000){
		var height = lol*0.125;
	}

	else{
		var height = lol*0.10;
	}

    $(document).on("scroll", onScroll);
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-height
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });

	jQuery('#date').datetimepicker({
  		timepicker:false,
  		format:'d.m.Y'
	});

	jQuery('#heure').datetimepicker({
  		datepicker:false,
  		format:'H:i'
	});

	$(".fancybox").fancybox({
		prevEffect	: 'elastic',
		nextEffect	: 'elastic',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#navbar a:not(.tel)').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#navbar ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
</script>

<!--NAV-->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <div id="left_navbar">  	
      	<a class="navbar-brand active" href="#title_accueil">LE SOUFFLOT</a>
      	<p><a class="tel" href="tel:+33386423900">+33 (0)3 86 42 39 00</a></p>
      </div>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#texte_presentation">PRESENTATION</a></li>
        <li><a href="#menu_formule">MENUS</a></li>
        <li><a href="#vins">LES VINS</a></li> 
        <li><a href="#galerie">GALERIE</a></li>
        <li><a href="#resa_infos">RESERVATION & INFOS</a></li> 
        <li><a href="#map">CONTACT</a></li> 
      </ul>
    </div>
  </div>
</nav>
<!--Header-->
<div id="background">
	<div class="container">
		<div class="row">
			<div id="title_accueil">
				<h1>LE SOUFFLOT</h1>
				<hr>
				<h2>RESTAURANT</h2>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<div id="txt_accueil" class="col-lg-12">
				<p>Restaurant le Soufflot<br>
					33, rue Soufflot - 89290 Irancy <br>
					Réservation : +33 (0)3 86 42 39 00 <br></p>
				<p>Ouvert du : <br>
					-&nbsp&nbspMardi au dimanche au déjeuner <br>
					-&nbsp&nbspAinsi que le vendredi et le samedi au dîner </p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div id="links" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="#"><div id="link1"></div></a>
				<a href="#"><div id="link2"></div></a>
				<a href="#"><div id="link3"></div></a>
			</div>
		</div>
	</div>

	<div class="scroll_arrow">
		<a href="#texte_presentation"><img src="img/down-arrow.png" alt="arrow"></a>
	</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="common"  id="texte_presentation">
			<h2>PRESENTATION</h2>
			<hr>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat cumque aliquid aspernatur velit repudiandae totam excepturi earum similique minima, ipsam distinctio adipisci praesentium, nam quidem unde error autem. Ut, corporis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita molestiae eveniet corporis facilis distinctio optio sed ipsa aperiam, sunt, explicabo voluptas provident illo sit nihil nobis, et odit similique officiis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nemo dolore ab placeat praesentium mollitia recusandae quas aspernatur dolorum beatae, rem, magnam, error quam voluptas impedit earum atque consectetur odio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum fuga, rem quis odio adipisci facilis necessitatibus maxime, nesciunt quae sint eveniet, eum quod placeat molestiae nemo similique. Iste, quasi, totam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet maiores officiis, doloribus, ipsam minus ut exercitationem iste ducimus quos porro quisquam tempora nostrum, quasi alias ab, libero harum nulla tenetur.</p>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="common col-lg-12 col-md-12 col-sm-12 col-xs-12" id="menu_formule">
		<div class="row">
			<h2>MENU ET FORMULES</h2>
			<hr>
		</div>
		<div class="all_menu">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h3>Entrée</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, omnis. Dolores vitae beatae voluptates voluptatum illo deleniti repellat.Consectetur temporibus dolor, voluptatum dignissimos iusto illum blanditiis doloribus ullam excepturi deserunt.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h3>Plat</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci perferendis repellendus natus, ex maiores aliquam quas laboriosam eum sapiente itaque quibusdam vero rem fugit consequuntur tenetur facere id. Quam, deserunt.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<h3>Dessert</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium reprehenderit a tempora porro aperiam! Quidem mollitia consectetur saepe facilis inventore, sequi accusamus nihil iusto vitae porro, aut aliquid! Corporis, quasi.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="common col-lg-6 col-lg-offset-4 col-md-7 col-md-offset-3 col-sm-9 col-sm-offset-2 col-xs-9 col-xs-offset-2" id="formules">
			<h3>FORMULES</h3>
			<p>Entrée + plat + dessert........................................................28€<br>
				Entrée + plat + fromage + dessert...................................32€<br>
				Menu dégustation (dîner)..................................................28€</p>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="common col-lg-12" id="vins">
			<h2>CARTE DES VINS</h2>
			<hr>
			<p>Vous pouvez consulter notre carte des vins complète : </p>
			<a href="#"><button class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">Carte des vins complète</button></a>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="common" id="galerie">
		<div class="row">
			<h2>GALERIE</h2>
			<hr>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12" id="galerie_button">
				<button class="col-lg-2 col-md-3 col-sm-4 col-xs-4">Acualités</button>
				<button class="col-lg-2 col-md-3 col-sm-4 col-xs-4">Restaurant</button>
				<button class="col-lg-2 col-md-3 col-sm-4 col-xs-4">Presse</button>
				<button class="col-lg-2 col-md-3 col-sm-4 col-xs-4">L'équipe</button>
			</div>
		</div>
		<div class="row">
			<div id="photos_galerie">
				<a class="fancybox" rel="gallery1" href="img/rest.jpg" title="Photo restaurant">
					<img src="img/rest.jpg" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="img/rest2.jpg" title="Photo restaurant">
					<img src="img/rest2.jpg" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="img/rest3.jpg" title="Photo restaurant">
					<img src="img/rest3.jpg" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="img/rest4.jpg" title="Photo restaurant">
					<img src="img/rest4.jpg" alt="" />
				</a>
				<a class="fancybox" rel="gallery1" href="img/rest5.jpg" title="Photo restaurant">
					<img src="img/rest5.jpg" alt="" />
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="common col-lg-12 col-md-12" id="resa_infos">
		<div class="row">
			<div class="col-lg-8 col-md-8" id="resa">
				<h2>RESERVATION</h2>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="email">Nom* :</label>
							<div class="col-lg-10 col-md-9">
								<input type="nom" required class="form-control" id="nom" placeholder="Nom">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="prenom">Prénom* :</label>
							<div class="col-lg-10 col-md-9"> 
								<input type="prenom" required class="form-control" id="prenom" placeholder="Prénom">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="email">Email* :</label>
							<div class="col-lg-10 col-md-9">
								<input type="email" required class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="telephone">Téléphone* :</label>
							<div class="col-lg-6 col-md-5"> 
								<input type="telephone" required class="form-control" id="telephone" placeholder="Téléphone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="personnes">Nombre de personnes :</label>
							<div class="col-lg-6 col-md-5"> 
								<input type="prsonnes" class="form-control" id="personnes" placeholder="Nombre de personne(s)">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="date">Date* :</label>
							<div class="col-lg-10 col-md-9"> 
								<input type="text" required class="form-control" id="date" value="<?php echo $date; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="heure">Heure d'arrivée* :</label>
							<div class="col-lg-10 col-md-9"> 
								<input type="text" class="form-control" required min=9:00 max=17:00 id="heure" placeholder="Heure d'arrivée" ">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2 col-md-3" for="commentaires">Commentaires :</label>
							<div class="col-lg-10 col-md-9"> 
								<textarea name="commentaires" id="commentaires" class="form-control" rows="4"></textarea>
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-3">
								<button type="submit" class="btn btn-default">Valider</button>
							</div>
						</div>
					</form>
			</div>
			<div class="col-lg-4 col-md-4" id="infos">
				<h2>INFOS</h2>
				<div id="infos_content">
					<p>Le restaurant est ouvert du mardi au dimanche au déjeuner ainsi que le vendredi et le samedi au dîner. Il est conseillé de réserver à l'avance.</p>
					<p>Vous pouvez nous contacter : <br>
					Par téléphone : <strong>03 86 42 39 00</strong><br>
					Par mail : <strong>????@gmail.com</strong><br>
					Ou par Facebook : </p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem soluta molestiae aperiam, dolorem dolorum natus, veniam corporis, reiciendis, quae id odit vitae placeat cumque officia ullam ut voluptatibus ea.</p>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div id="find_us" class="common">
		<div class="row">
			<h2>Nous trouver</h2>
			<hr>
		</div>
		<div class="row" id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2684.4944404387716!2d3.6647970482442322!3d47.713651987663944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee475ae5125405%3A0x2ca9ca5932ec3336!2s33+Rue+Soufflot%2C+89290+Irancy!5e0!3m2!1sfr!2sfr!4v1464767039107" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div id="footer" class="common col-lg-12">
			<div id="coord" class="col-lg-12">
				<p class="col-lg-4">Restaurant Irancy le Soufflot - 33, rue Soufflot - 89290 IRANCY - 03 86 42 39 00</p>
				<p class="col-lg-4">Ouvert du mardi au dimanche au déjeuner et le vendredi et samedi au dîner.</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>
