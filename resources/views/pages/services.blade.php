@extends('layout.main')
@section('body')

	<section class="header_text sub">
		<img class="pageBanner" src="{{asset('template/themes/images/pageBanner.png')}}" alt="New products" >
		<h4><span>New products</span></h4>
	</section>
	<section class="main-content">

		<div class="row">						
			<div class="span9">								
				<ul class="thumbnails listing-products">
					<li class="span3">
						<div class="product-box">
							<span class="sale_tag"></span>												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/9.jpg"></a><br/>
							<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
							<a href="#" class="category">Phasellus consequat</a>
							<p class="price">$341</p>
						</div>
					</li>       
					<li class="span3">
						<div class="product-box">												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
							<a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
							<a href="#" class="category">Erat gravida</a>
							<p class="price">$28</p>
						</div>
					</li>
					<li class="span3">
						<div class="product-box">
							<span class="sale_tag"></span>												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
							<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
							<a href="#" class="category">Suspendisse aliquet</a>
							<p class="price">$341</p>
						</div>
					</li>
					<li class="span3">
						<div class="product-box">												
							<span class="sale_tag"></span>
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
							<a href="product_detail.html" class="title">Praesent tempor sem sodales</a><br/>
							<a href="#" class="category">Nam imperdiet</a>
							<p class="price">$49</p>
						</div>
					</li>
					<li class="span3">
						<div class="product-box">                                        												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
							<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
							<a href="#" class="category">Congue diam congue</a>
							<p class="price">$35</p>
						</div>
					</li>       
					<li class="span3">
						<div class="product-box">												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
							<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
							<a href="#" class="category">Gravida placerat</a>
							<p class="price">$61</p>
						</div>
					</li>
					<li class="span3">
						<div class="product-box">												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
							<a href="product_detail.html" class="title">Quam ultrices rutrum</a><br/>
							<a href="#" class="category">Orci et nisl iaculis</a>
							<p class="price">$233</p>
						</div>
					</li>
					<li class="span3">
						<div class="product-box">												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
							<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
							<a href="#" class="category">Urna nec lectus mollis</a>
							<p class="price">$134</p>
						</div>
					</li>
					<li class="span3">
						<div class="product-box">												
							<a href="product_detail.html"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
							<a href="product_detail.html" class="title">Luctus quam ultrices</a><br/>
							<a href="#" class="category">Suspendisse aliquet</a>
							<p class="price">$261</p>
						</div>
					</li>
				</ul>								
				<hr>
				<div class="pagination pagination-small pagination-centered">
					<ul>
						<li><a href="#">Prev</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>

		</div>
	</section>

@endsection
