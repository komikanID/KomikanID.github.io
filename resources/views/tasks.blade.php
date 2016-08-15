@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
	<h1>Komikan</h1> 
	<p>Turn comic into lifestyle</p> 
</div>

<!-- Container (About Section) -->	
<div id="about" class="container-fluid">
	<div class="row">
		<div class="col-sm-6 text-center">
			<!-- ganti image logo -->
			<img 
			src="file:///views/logo remake copy.png" 
			style="width: 50%; height: 50%;">
		</div>	
		<div class="col-sm-6">
			<h2>Tentang Komikan</h2>
			<h4 style="text-align: justify;">Sebuah wadah yang bertujuan untuk membangun budaya komik indonesia dengan memberikan solusi terhadap permasalahan yang dihadapi komikus lokal dan menjadi sarana penerbitan komik secara gratis.</h4>
		</div>
	</div>
</div>

<!-- add service container -->
<div id="services" class="container-fluid text-center bg-grey">
	<h2>SERVICES</h2>
	<h4>Komikan menawarkan</h4>
	<br>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-send logo-small"></span>
			<h4>Kecepatan</h4>
			<p>Proses penerbitan secara instan</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-usd logo-small"></span>
			<h4>Monetizing</h4>
			<p>Setiap komikus bisa mendapatkan penghasilan</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-briefcase logo-small"></span>
			<h4>Merchandise</h4>
			<p>Membeli merchandise secara langsung</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-star logo-small"></span>
			<h4>Sponsor</h4>
			<p>Kesempatan untuk mendapatkan sponsor atau menjadi sponsor untuk komik</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-download-alt logo-small"></span>
			<h4>Offline</h4>
			<p>Baca komik favorit anda secara offline</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-home logo-small"></span>
			<h4>Komunitas</h4>
			<p>Menghubungkan antar sesama komikus dan pembaca</p>
		</div>
	</div>
</div>

<!-- Portofolio -->
<!-- <div id="portofolio" class="container-fluid text-center bg-grey">
	<h2>Portofolio</h2>
	<h4>What we have created</h4>
	<div class="row text-center">
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="paris.jpg" alt="Paris">
				<p><strong>Paris</strong></p>
				<p>asd</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="sanfran.jpg" alt="San Fransisco">
				<p><strong>asd</strong></p>
				<p>asd</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="thumbnail">
				<img src="newyork.jpg" alt="New York">
				<p><strong>asd</strong></p>
				<p>asd</p>
			</div>
		</div>
	</div>


	<!--carousel sliding text-->
	<h2 style="text-align: center;">What our customers say</h2>
	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<h4>"This company is the best. I am so happy with the result!"<br>
					<span style="font-style:normal;">
						Michael Roe, Vice President, Comment Box
					</span>
				</h4>
			</div>
			<div class="item">
				<h4>"One word... WOW!!"<br>
					<span style="font-style:normal;">
						John Doe, Salesman, Rep Inc
					</span>
				</h4>
			</div>
			<div class="item">
				<h4>"Could I... BE any more happy with this company?"<br>
					<span style="font-style:normal;">
						Chandler Bing, Actor, FriendsAlot
					</span>
				</h4>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!--revenue container-->
<div id="revenue" class="container-fluid">
	<div class="text-center">
		<h2>Revenue</h2>
		<h4>Metode pendapatan sebagai komikus</h4>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-default text-center">
				<div class="panel-heading">
					<h1>Content</h1>
				</div>
				<div class="panel-body">
					<p>Meminjam atau membeli untuk mengunduh komik</p>
				</div>
				<div class="panel-footer">
					<h3>$19</h3>
					<h4>per month</h4>
					<button class="btn btn-lg">Sign Up</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default text-center">
				<div class="panel-heading">
					<h1>Merchandise</h1>
				</div>
				<div class="panel-body">
					<p>Penjualan merchandise secara langsung kepada pembaca</p>
				</div>
				<div class="panel-footer">
					<h3>$29</h3>
					<h4>per month</h4>
					<button class="btn btn-lg">Sign Up</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-default text-center">
				<div class="panel-heading">
					<h1>Sponsor</h1>
				</div>
				<div class="panel-body">
					<p>Pembaca ata perusahaan dapat mensponsori komik anda</p>
				</div>
				<div class="panel-footer">
					<h3>$49</h3>
					<h4>per month</h4>
					<button class="btn btn-lg">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!--contact container-->
<div id="contact" class="container-fluid bg-grey">
	<h2 class="text-center">CONTACT</h2>
	<div class="row">
		<div class="col-sm-5">
			<p>Hubungi kontak dibawah untuk informasi lebih lanjut.</p>
			<p><span class="glyphicon glyphicon-map-marker"></span>&emsp;Binus Anggrek, Ruang 323<br>&emsp;&emsp;Jl.Kebun Jeruk Raya no.27, Kebon Jeruk<br>&emsp;&emsp;Jakarta Barat, Indonesia</p>
			<p><span class="glyphicon glyphicon-phone"></span>&emsp;+6287883255788</p>
			<p><span class="glyphicon glyphicon-envelope"></span>&emsp;komikan.info@gmail.com</p> 
		</div>
		<div class="col-sm-7">
			<div class="row">
				<div class="col-sm-6 form-group">
					<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				</div>
				<div class="col-sm-6 form-group">
					<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				</div>
			</div>
			<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
			<div class="row">
				<div class="col-sm-12 form-group">
					<button class="btn btn-default pull-right" type="submit">Send</button>
				</div>
			</div> 
		</div>
	</div>
</div>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">HOME</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#services">SERVICES</a></li>
				<!-- <li><a href="#portofolio">PORTOFOLIO</a></li> -->
				<li><a href="#revenue">REVENUE</a></li>
				<li><a href="#contact">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- Footer -->
<footer class="container-fluid text-center">
	<a href="#myPage" title="to Top">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a>
	<h2 style="text-align: center;">Subscribe untuk informasi terbaru!</h2>
</footer>

<!-- Smooth Scrolling -->
<script>
	$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
   if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
    	scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
  });
    } // End if
});

  $(window).scroll(function() {
  	$(".slideanim").each(function(){
  		var pos = $(this).offset().top;

  		var winTop = $(window).scrollTop();
  		if (pos < winTop + 600) {
  			$(this).addClass("slide");
  		}
  	});
  });

})
</script>

@endsection