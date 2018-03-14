<div class="container">
		<div class="jumbotron">
			<h2>Hello admin :  <?= $_SESSION['username'] ?></h2>
		</div>
	</div>

	<div class="container">
		<h2 align="center" style="color:red">MANAGE DATA : </h2>
		<hr>
	</div>
	<br>
	<div class="container">	
		<div class="row">
			<div class="col-md-3">
				<div class="card-deck mb-3 text-center">
			        <div class="card mb-4 box-shadow">
			            <a href="anggota.php" style="text-decoration: none;">
			            	<button type="button" class="btn btn-lg btn-block btn-outline-danger tinggi">ANGGOTA</button>
			            </a>
			         </div>
			    </div>
			</div>

			<div class="col-md-3">
				<div class="card-deck mb-3 text-center">
			        <div class="card mb-4 box-shadow">
			            <a href="staff.php" style="text-decoration: none;">
			            	<button type="button" class="btn btn-lg btn-block btn-outline-danger tinggi">STAFF</button>
			            </a>
			         </div>
			    </div>
			</div>

			<div class="col-md-3">
				<div class="card-deck mb-3 text-center">
			        <div class="card mb-4 box-shadow">
			            <a href="product.php"style="text-decoration: none;">
			            	<button type="button" class="btn btn-lg btn-block btn-outline-danger tinggi">PRODUCT</button>
			            </a>
			         </div>
			    </div>
			</div>

			<div class="col-md-3">
				<div class="card-deck mb-3 text-center">
			        <div class="card mb-4 box-shadow">
			            <a href="service.php" style="text-decoration: none;">
			            	<button type="button" class="btn btn-lg btn-block btn-outline-danger tinggi">SERVICE</button>
			            </a>
			         </div>
			    </div>
			</div>

		</div>
	</div>