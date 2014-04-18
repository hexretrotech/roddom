<html>
<head>
	<title>Панель управления [www.localhost.ru]</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./stylesheet/font-family.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/stat.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
	
</head>
<body>
	<?php include "./include/head.php"; ?>
	<?php include "./include/stat_today.php"; ?>
	<script>
		$( document ).ready(function() {
			new Morris.Line({
  // ID of the element in which to draw the chart.
  				element: 'all-today',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
				  data: [
					<?php
						for($i=0; $i<=23; $i++) {
							echo "{ time : '" . $i . ":00', value: " . $all_today[$i][0] . "}, \n";
						}
					?>
				  ],
  // The name of the data record attribute that contains x-values.
				  xkey: 'time',
				  // A list of names of data record attributes that contain y-values.
				  ykeys: ['value'],
				  // Labels for the ykeys -- will be displayed when you hover over the
				  // chart.
				  labels: ['Посещений'],
					parseTime: false
				});

			new Morris.Line({
  // ID of the element in which to draw the chart.
  				element: 'one-today',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
				  data: [
					<?php
						for($i=0; $i<=23; $i++) {
							echo "{ time : '" . $i . ":00', value: " . $one_today[$i][0] . "}, \n";
						}
					?>
				  ],
  // The name of the data record attribute that contains x-values.
				  xkey: 'time',
				  // A list of names of data record attributes that contain y-values.
				  ykeys: ['value'],
				  // Labels for the ykeys -- will be displayed when you hover over the
				  // chart.
				  labels: ['Посещений'],
					parseTime: false
				});
	});
	</script>
	<div class="scrolled">
		<?php include "./include/left.php"; ?>
		<div class="content bloks_content">
			<div class="name-page"><i id="icon-home"></i>Статистика посещений за сегодня</div>
			<div class="edit-frame fiolet">
				<div class="title-edit fiolet-title">
					<span>
						<i id="icon-edit"></i>
						Просмотров за сегодня
					</span>
				</div>
				<div class="edit-body">

<div id="all-today" style="height: 250px;"></div>
				</div>
			</div>

<div class="edit-frame fiolet">
				<div class="title-edit fiolet-title">
					<span>
						<i id="icon-edit"></i>
						уникальных посетителей 
					</span>
				</div>
				<div class="edit-body">

<div id="one-today" style="height: 250px;"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
