<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<a class="navbar-brand" href="#">VSpeaker</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link <?php if($page=="Login")echo"active"?>" href="index.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=="About")echo"active"?>" href="about.php">About</a>
			</li>
		</ul>
	</div>  
</nav>