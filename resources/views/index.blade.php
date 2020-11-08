<!DOCTYPE html>
<html>
	<head>
		<title>CV Website</title>
		<meta charset="utf-8">
		<!-- Bootstrap 4 is mobile-first -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<!-- BS4 CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="../resources/css/style.css">
		<!-- JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- The Modal take CV -->
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">{{__('take_cv')}}</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body">
		        <p class="w-100 ">{{__('input_email_to_take')}}</p>
		        <form class="text-center" action="{{route('send_mail')}}" method="GET">
		        	{{ csrf_field() }}
		        	<div class="form-group">
		        		<input class="form-control w-75 float-left m-0" type="text" name="email" minlength="11" maxlength="255" placeholder="{{__('ip_email')}}">
		        		<input class="float-right btn btn-primary w-25" type="submit" value="{{__('send')}}">
		        	</div>
		        </form>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('close')}}</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- End modal take CV -->
			<!-- Menu -->
			<nav class="navbar navbar-expand-md bg-dark navbar-dark pl-5 pr-5">
				<!-- Brand -->
				<a class=" navbar-brand" href="#">{{__('tran_viet_si')}}</a>
				<!-- Toggle/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Navbar links -->
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="navbar-item dropdown">
							<a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
								{{__('content')}}
							</a>
							<ul aria-labelledby="dropdownMenu1" class="dropdown-menu shadow">
		            <li>
		            	<a href="#" location="#summary" class="dropdown-item links-scroll">
		            		{{__('summary')}}
		            	</a>
		            </li>
		            <li>
		            	<a href="#" location="#skill" class="dropdown-item links-scroll">
		            		{{__('skill')}}
		            	</a>
		            </li>
		            <li>
		            	<a href="#" location="#experience" class="dropdown-item links-scroll">
		            		{{__('experience')}}
		            	</a>
		            </li>
		            <li>
		            	<a href="#" location="#contact-me" class="dropdown-item links-scroll">
		            		{{__('contact_me')}}
		            	</a>
		            </li>
		          </ul>
						</li>
						<li class="navbar-item dropdown">
							<a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
								{{__('language')}}
							</a>
							<ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
		            <li>
		            	<a href="{{route('lang',['lang'=> 'en'])}}" class="dropdown-item">
		            		{{__('english')}}
		            	</a>
		            </li>
		            <li>
		            	<a href="{{ route('lang',['lang' => 'vi']) }}" class="dropdown-item">
		            		{{__('vietnamese')}}
		            	</a>
		            </li>
		          </ul>
						</li>
						<li class="navbar-item dropdown">
							<a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
								{{__('take_pdf')}}
							</a>
							<ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
		            <li>
		            	<a class="dropdown-item" data-toggle="modal" data-target="#myModal" href="#">
		            		{{__('send_email')}}
		            	</a>
		            </li>
		            <li>
		            	<a href="#" class="dropdown-item">
		            		{{__('download')}}
		            	</a>
		            </li>
		          </ul>
						</li>
					</ul>
				</div>
				<!-- End navbar links -->
			</nav>
			<!-- End menu -->

			<!-- Message -->
			@if(Session::has('message'))
				<p class="alert alert-{{ Session::get('message')[0] }}">{{ Session::get('message')[1] }}</p>
			@endif
			<!-- End message -->

			<!-- Banner -->
			<div class="row">
				<div class="col-12 bg-white">
					<img class="d-block w-100" src="https://contego.com/wp-content/uploads/2014/07/1000-X-300-PNG.png">
						<div class="banner-box text-center">
							<h1 class="text-primary">{{__('Hi!')}}</h1>
							<p>
								{{__('introduce')}}
							</p>
						</div>
				</div>
			</div>
			<!-- End banner -->
			<!-- Container -->
			<div class="container mb-3">
				<!-- Summary -->
				<div class="row summary mt-4 pt-2 border rounded bg-white">
					<!-- <div class="row"> -->
						<div class="col-12">
							<div class="title text-center text-primary" id="summary">
								<h1>{{__('summary')}}</h1>
							</div>
							<hr>
						</div>
						<!-- Avatar -->
						<div class="col-md-3 p-2 d-flex justify-content-center">
							<img src="https://2.bp.blogspot.com/-OvzSvVKgZ-o/WKMFGVDf2bI/AAAAAAAAGYA/6nSIGSOOAmEpbfpfKsJ393SPT_FCHKPXgCEw/s1600/anh4x6.jpg" >
						</div>
						<!-- End avatar -->
						<!-- Profile -->
						<div class="col-md-9 p-2 ">
							<div class="row m-0 mb-3 w-100">
								<!-- Personal profile -->
								<div class="col-md-4 mb-3 pt-3 pb-3 personal-profile ">
									<h2><center>{{__('personal_profile')}}</center></h2>
									<table class="pt-3 border-0">
										<tbody>
											<tr>
												<td><b>{{__('gender')}}:</b></td>
												<td>{{__('male')}}</td>
											</tr>
											<tr>
												<td><b>{{__('birthday')}}:</b></td>
												<td>17/02/1999</td>
											</tr>
											<tr>
												<td><b>{{__('marital_status')}}:</b></td>
												<td>{{__('single')}}</td>
											</tr>
											<tr>
												<td><b>{{__('nationality')}}:</b></td>
												<td>{{__('vietnam')}}</td>
											</tr>
											<tr>
												<td><b>{{__('country')}}:</b></td>
												<td>{{__('vietnam')}}</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- End Personal profile -->
								<!-- Enducation -->
								<div class="col-md-8 mb-3 pt-3 pb-3 bg-light">
									<h2 class="w-100"><center>{{__('education')}}</center></h2>
									<table class="pt-3 border-0">
										<tbody >
											<tr>
												<td><b>{{__('school')}}:</b></td>
												<td>{{__('school_cit')}}</td>
											</tr>
											<tr>
												<td><b>{{__('completion_date')}}:</b></td>
												<td>5/2020</td>
											</tr>
											<tr>
												<td><b>{{__('major')}}:</b></td>
												<td>{{__('IT')}}</td>
											</tr>
											<tr>
												<td><b>{{__('gpa')}}:</b></td>
												<td>3.54 / 4.0</td>
											</tr>
											<tr>
												<td><b>{{__('graduation_grade')}}:</b></td>
												<td>{{__('good')}}</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- End education -->
							</div>
							<!-- Text summary -->
							<div class="row w-100 m-0 pl-1 pr-1">
								<p class="mt-2 pt-2 text-justify">
									{{__('introduce_2')}}
								</p>
							</div>
							<!-- End text summary -->
						</div>
					<!-- End profile -->
				</div>
				<!-- End summary -->
				<!-- Skill -->
				<div class="row skill mt-4 pt-2 border rounded bg-white">
					<div class="col-12">
						<div class="text-center text-primary" id="skill">
							<h1>{{__('skill')}}</h1>
						</div>
						<hr>
					</div>
					<!-- Skill box 1 -->
					<div class="col-lg-3 col-md-6 mb-3">
						<div class="border rounded bg-light p-2">
							<h5 class="text-center">PROGRAMMING LANGUAGES</h5>
							<ul>
								<li>HTML/CSS</li>
								<li>JavaScript</li>
								<li>PHP</li>
								<li>Java</li>
								<li>Ruby</li>
							</ul>						
						</div>
					</div>
					<!-- End Skill box 1 -->

					<!-- Skill box 2 -->
					<div class="col-lg-3 col-md-6 mb-3">
						<div class="border rounded bg-light p-2">
							<h5 class="text-center">FRAMEWORKS</h5>
							<ul>
								<li>Bootstrap</li>
								<li>Jquery</li>
								<li>Laravel</li>
								<li>Spring</li>
								<li>Rails</li>
							</ul>
						</div>
					</div>
					<!-- End Skill box 2 -->
					<!-- Skill box 3 -->
					<div class="col-lg-3 col-md-6 mb-3">
						<div class="border rounded bg-light p-2">
							<h5 class="text-center">DATABASE</h5>
							<ul>
								<li>MySQL</li>
								<li>SQLServer</li>
							</ul>
							<br>
							<h5 class="text-center">VERSION CONTROLLER</h5>
							<ul>
								<li>Git(GitHub)</li>
							</ul>
						</div>
					</div>
					<!-- End Skill box 3 -->
					<!-- Skill box 4 -->
					<div class="col-lg-3 col-md-6 mb-3">
						<div class="border rounded bg-light p-2">
							<h5 class="text-center">IDE</h5>
							<ul>
								<li>Sublime Text 3</li>
								<li>Eclipse</li>
								<li>Spring Tool Suite 3</li>
							</ul>
							<br>
							<h5 class="text-center">{{__('other_language')}}</h5>
							<ul>
								<li>{{__('english')}}</li>
							</ul>
						</div>
					</div>
					<!-- End Skill box 4 -->
				</div>
				<!-- End skill -->
				<!-- Experience -->
				<div class="row skill mt-4 pt-2 border rounded bg-white">
					<div class="col-12">
						<div class="text-center text-primary" id="experience">
							<h1>{{__('experience')}}</h1>
						</div>
						<hr>
					</div>
					<!-- Exp1 -->
					<div class="col-12 mb-2">
						<div class="w-100 d-flex justify-content-center">
							<div class="time-exp">
								<p>
									3-2020<br>
									to<br>
									6/2020
								</p>
							</div>
						</div>
						<div class="content-exp mt-5 p-5 text-justify">
							<h4>{{__('FA_fpt')}}</h4>
							<br>
							<p>
								{{__('detail_job')}}
							</p>
						</div>
					</div>
					<!-- End exp1 -->
				</div>
				<!-- End experience -->
			</div>
			<!-- End container -->
			<!-- Footer -->
			<footer class="bg-dark" id="contact-me">
				<div class="row p-3 text-center text-white">
					<div class="col-12">
						<h4>{{__('contact_me')}}</h4>
						<hr>
					</div>
					<div class="col-md-4">
						{{__('address')}}<br>
						<a href="#">
							<i class="fas fa-map-marker-alt"></i>
							{{__('address_value')}}
						</a>
					</div>
					<div class="col-md-4">
						EMAIL<br>
						<a href="#">
							<i class="far fa-envelope"></i>
							vietsi1999@gmail.com
						</a>
					</div>
					<div class="col-md-4">
						{{__('phone')}}<br>
						<a href="#">
							<i class="fas fa-mobile-alt"></i>
							0762798615
						</a>
					</div>
				</div>
			</footer>
			<!-- End footer -->
	</body>
	<!-- Custom JS -->
	<script type="text/javascript" src="../resources/js/smooth-scrolling.js"></script>
</html>