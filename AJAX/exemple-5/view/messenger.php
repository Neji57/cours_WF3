<nav class="navbar bg-warning fixed-top navbar-dark">
	<div class="col">
		<span class="lead">Super Messenger</span>
		<div class="float-right">
			<span class="mr-4 btn btn-outline-dark">
				<i class="fas fa-user"></i>
				<?=$user['username'] ?>
			</span>
			<a href="src/logout.php" class="btn btn-info">Se déconnecter</a>
		</div>
	</div>
</nav>

<!-- MESSAGES -->

<ul class="messages list-unstyled" id="messages">
	<!-- Template mes messages -->
	<li class="message me media d-none">
		<div class="avatar float-left">
			<img src="" alt="" class="avatar rounded-circle img-thumbnail">
		</div>
		<div class="media-body">
			<small class="infos"></small>
			<div class="content bg-warning text-right text-dark"></div>
		</div>
	</li>

	<!-- Template les autres messages -->
	<li class="message not-me media d-none">
		<div class="media-body text-right">
			<small class="infos"></small>
			<div class="content bg-danger text-right text-light"></div>
		</div>
		<div class="avatar float-right">
			<img src="" alt="" class="avatar rounded-circle img-thumbnail">
		</div>
	</li>
</ul>

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