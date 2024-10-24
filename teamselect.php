
<html>
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Выбор лиги</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min2.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="container">
			<div class="navbar navbar-default" role="navigation" style="margin-top:1%;background-color:initial;border-color:transparent;">
		        <div class="container-fluid">
		          <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="http://pesway.pes6.ru"><img class="img-responsive" style="width:50px;padding-top: 0%;" src="http://pesway.pes6.ru/newbase/pwlogobdmini.png"></a>
		          </div>
		          <div class="navbar-collapse collapse">
		            <ul class="nav navbar-nav">
		              <li><a href="http://pesway.pes6.ru/newbase/newbase2/teamselect.php">На главную</a></li>
		              <li><a href="http://pesway.pes6.ru/newbase/search/search.php">Расширенный поиск игроков</a></li>
		              <li style="margin-top: 1.5%;margin-left: 50px;">
							<form class="form-inline" role="search" action="player-search.php">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Поиск..." name="q">
									<div class="input-group-btn">
										<button class="btn btn-success" type="submit">Поиск</button>
									</div>
								</div>
							</form></li>
		              
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
		              <li><a href="http://pesstatsdatabase.com/"><img src="img/PSD.png" class="img-responsive" style="width:75px" a=""></a></li>
		              <li><a href="http://www.transfermarkt.co.uk/"><img src="img/Transfermarkt-Logo.jpg" class="img-responsive" style="width:70px"></a></li>
		              <li><a href="leagues/league.php?league=Free">Свободные агенты</a></li>
		            </ul>
		          </div><!--/.nav-collapse -->
		        </div><!--/.container-fluid -->
		    </div>
			<div class="col-md-12" style="padding-left:40px;padding-right:0px;">
				
				<div class="row leagues">
					<div class="col-md-12 col-md-pull-1" style="padding-right:0px;padding-left:0px;">
						<div class="col-md-3">
							<div class=ImgWrap><a href="leagues/league.php?league=Barclays Premier League"><img class="image UP" src="img/eng1.png"/><img class="image Down" src="img/eng2.png"/></a></div>
						</div>
						<div class="col-md-3">
							<div class=ImgWrap><a href="leagues/league.php?league=Liga BBVA"><img class="image UP" src="img/spa1.png"/><img class="image Down" src="img/spa2.png"/></a></div>
						</div>
						<div class="col-md-3">
							<div class=ImgWrap><a href="leagues/league.php?league=Serie A"><img class="image UP" src="img/ita1.png"/><img class="image Down" src="img/ita2.png"/></a></div>
						</div>
						<div class="col-md-3">
							<div class=ImgWrap><a href="leagues/league.php?league=SuperLiga"><img class="image UP" src="img/super1.png"/><img class="image Down" src="img/super2.png"/></a></div>
						</div>
					</div>
				</div>
				<div class="row case">
					<div class="col-md-12">
						<div class="col-md-8 col-md-offset-4" style="padding-left:0px;">
							<div class="col-md-1">
								<img src="img/index_left.png">
							</div>
							<div class="col-md-6" style="padding-left:0px;padding-right:0px;">
								<div class="col-md-12" style="padding-left:0px;">
									<div class="case_league">
										<font face="Century Gothic" color="white" size="5px">ВЫБЕРИТЕ ЛИГУ</font>
									</div>
								</div>
							</div>
							<div class="col-md-1 col-md-pull-4" style="margin-left:3.5%">
								<div class="index_right">
									<img src="img/index_right.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>