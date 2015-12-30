<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>

		<title>HOME | V-ELMS</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta content="" name="description"/>
		<meta content="" name="author"/>

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<body>

		@include('theme.velms.partial.header')

		<div class="page-container">

			@include('theme.velms.partial.breadcrumb')

			<div class="page-content">
				<div class="container">
					<ul class="page-breadcrumb breadcrumb">
						<br />
					</ul>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="portlet light">
								<center>
									<img class="img-responsive" src="/assets/home.jpg">
								</center>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="portlet light">
								<div class="portlet-body custom-page">
									<p><p></p><h2>Who We Are...</h2><h2><span style="font-style: italic;">Virtual Education Life Skills Mentoring Services</span></h2><h3>Our Mission</h3><p><strong>V-ELMS'</strong> mission is to assess, evaluate and mentor underserved 8 to 18 year olds to achieve 'life-long goals' in their personal, educational and future career lives.</p><h2>Why We Are</h2><h3>Our Belief</h3><p>V-ELMS believes once <span id="target" style="color: #324A8C">mentees</span> (those who have been underserved) are assessed, their 'learning styles' identified and are teamed up with caring mentors with the same or similar learning styles; the barriers to success previously experienced by the mentees are erased allowing them to achieve their desired goals.</p><p></p></p>
									<br />
								</div>
							</div>
							<div class="portlet light">
								<div class="portlet-title custom-page">
									<h2>Upcoming Events</h2>
								</div>
								<div class="portlet-body custom-page">
									<table class="table table-hover table-light">
										<thead>
											<tr>
												<th>Event</th>
												<th>Date</th>
												<th>Location</th>
												<th>Type</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('theme.velms.partial.footer')

        <div class="scroll-to-top">
	        <i class="icon-arrow-up"></i>
        </div>
	</body>
</html>
