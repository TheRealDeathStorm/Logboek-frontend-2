<?php include 'includes/header.php'; ?>
<body>
<?php include 'includes/menu.php'; ?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trajecten</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-md-2">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kies uw vak
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>
            </div>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Kies uw klas
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </div>
            </div>
        </div>
<br>
		Begindatum: <input type="date">
        Einddatum:<input type="date">
	
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
