
<nav class="navbar bg-warning fixed-top navbar-dark">
	<div class="col">
		<span class="lead">Super Messenger</span>
		<div class="float-right">
			<span class="mr-4 btn btn-outline-dark"><i class="fas fa-user"></i> <?=$user['username'] ?></span>
			<a href="src/logout.php" class="btn btn-info">Se déconnecter</a>
		</div>
	</div>
</nav>

<!-- MESSAGES -->

<nav class="navbar bg-warning fixed-bottom navbar-dark">
	<div class="container-fluid">
		<form id="message-form" action="" method="post">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Entrez votre message" name="message">
				<div class="input-group-append">
					<button class="btn btn-info text-light">
						<i class="fa fa-paper-plane"></i>
					</button>
				</div>
			</div>
		</form>
	</div>
</nav>