@extends('../template')

@section('page')
<div>
	<br><br>
	<section id="slider">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
        			<img src="{{asset('files/slideb.jpeg')}}" class="d-block w-100" width="900" height="550">
   	 			</div>
    			<div class="carousel-item">
      				<img src="{{asset('files/slidea.jpeg')}}" class="d-block w-100" width="900" height="550">
    			</div>
  			</div>
		</div>
	</section>
	<br><br>
	<section id="aboutsec" style="background-color: #D4E6F1!important;">
		<div class="row">
			<br><br><br><br><br><br><br><br>
		</div>
		<div class="row">
			<div class="col-md-2">
		
			</div>
			<div class="col-md-8" style="color: gray;">
				<center>
					<h4>About</h4>
    				<hr color="#2E4053" size="5" width="30%">
    				<hr color="#2E4053" size="3" width="20%">
    				<br/><br/>
      				<h4><p>Berdiri tahun 1998, Rest-OwO siap melayani anda semua, wibu maupun tidak dengan makanan khas jepun yang anti-mainstream</p></h4>
				</center>
			</div>
			<div class="col-md-2">
		
			</div>
		</div>
		<div class="row">
			<br><br><br><br><br><br><br><br>
		</div>
	</section>
	<section id="contactsec">
		<div class="row">
			<br><br><br><br><br>
		</div>
		<div class="row">
			<div class="col-md-4">
		
			</div>
			<div class="col-md-4" style="color: gray;">
				<div class="card">
    				<img src="https://scontent.fsub5-1.fna.fbcdn.net/v/t1.0-9/52976953_648536788909908_3151805602062139392_n.jpg?_nc_cat=111&_nc_oc=AQlWaTfQAR7il_hnZQgDkvgA4zJjnM9hFWt3h57hqKlEVRRVG8jOyd2oshoAcdBHTJs&_nc_ht=scontent.fsub5-1.fna&oh=92f34d058b999a11f35ccc6b87df542a&oe=5DA64AB1" class="card-img-top" alt="imageprofile" width="300" height="300">
    				<div class="card-body">
      					<h5 class="text-center">Find Us</h5>
      					<center>
    						<a href='https://www.instagram.com/_avphntm/?hl=id'>

         					<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1024px-Instagram_logo_2016.svg.png" width="30" height="30" title="instagram/Rest-OwO" alt="instagram" border="none" />

    						<a href="https://www.facebook.com/avi.shintaro">

         					<img src="data:image/png;base64,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" width="30" height="30" title="facebook/us.Rest-OwO" alt="facebook" border="none" />
						</center>
    				</div>
    				<!-- <div class="card-footer">
      					<small class="text-muted">Last updated 3 mins ago</small>
    				</div> -->
  				</div>
			</div>
			<div class="col-md-4">
		
			</div>
		</div>
		<div class="row">
			<br><br><br><br><br><br><br><br>
		</div>
	</section>
	<br><br>
</div>

<!-- <script type="text/javascript">
	$('.carousel').carousel({
  		interval: 400
	})
</script> -->
@endsection
@section('judul')
Home
@endsection