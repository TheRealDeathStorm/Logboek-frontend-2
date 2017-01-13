<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/menu.php'; ?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trajecten</h1>
			</div>
		</div><!--/.row-->
				
		<select name="klas">
			<option value="41B">41B</option>
			<option value="42B">42B</option>
			<option value="43B">43B</option>
			<option value="41C">41C</option>
		</select><br>
		<select name="vak">
			<option value="java">Java</option>
			<option value="Android">Android</option>
			<option value="UML">UML</option>
			<option value="Engels">Engels</option>
		</select><br>
	
		Begindatum: <input type="date"> Einddatum:<input type="date">
	
		<div class="row">
			<div class="col-lg-12">
                <div class="content">
                    <div class="build-wrap"></div>
                    <div class="render-wrap"></div>
                    <button id="edit-form">Edit Form</button>
                </div>
                <script src="js/trajecten/jquery.min.js"></script>
                <script src="js/trajecten/form-builder.min.js"></script>
                <script src="js/trajecten/form-render.min.js"></script>
                <script src="js/trajecten/builder.js"></script>

			</div><!-- /.col-->
		</div><!-- /.row -->
<?php include 'includes/footer.php'; ?>
</body>

</html>
