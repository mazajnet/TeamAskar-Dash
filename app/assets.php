
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!--script type="text/javascript" src="assets/js/pages/dashboard.js"></script-->
	<!-- /theme JS files -->

      <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<style>
.sidebar-xs #main-h1-11 {
	margin-bottom: 9px !important;
	margin-top: 9px !important;
	width: 100% !important;
}
.sidebar-xs .navbar-brand {
	background:none !important;
}



.zero {
	float: one;
	clear: both;
}




#main-h1-11 {
  animation: pulse 7s infinite;
}


@keyframes pulse {
  0% {
    box-shadow: 0px 0px 5px #fff;
  }
  5% {
    box-shadow: 0px 0px 25px #fff;
  }
  50% {
    box-shadow: 0px 0px 200px #FF0000;
  }
  100% {
    box-shadow: 0px 0px 200px #000000;
  }
}



.label-danger {
	cursor: pointer;
}



#loader {
	position: fixed;
	top: 48%;
	right: 48%;
	padding: 2%;
	background: var(--color-white);
	z-index: 1500;
	cursor: pointer;
	opacity: 1;
	text-align: center;
	display: none;
}
.showed-loader {
	display: block !important;
}
#ghost {
	width: 100%;
	position: fixed;
	top: 0;
	right: -1000%;
	background: rgba(0,0,0,0.5);
	height: 100%;
	z-index: -4;
	cursor: pointer;
	opacity: 0;
	transition: none !important;
}

.showed-ghost {
	right: 0% !important;
	opacity: 1 !important;
	z-index: 1400 !important;
}


</style>