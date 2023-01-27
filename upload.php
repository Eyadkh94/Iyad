<link rel="stylesheet" href="uploadt.css">
<link rel="stylesheet" href="welcome.css">
<main>
				<!-- navbar -->
				<nav class="navbar">
					<ul>
						<li><a href="welcome.php?s=1">Home</a></li>
						<li><a href="download.php">Blogs</a></li>
						<li><a href="upload.php">upload</a></li>
					</ul>
				</nav>
				<!-- navbar -->
		</main>
<form action="uploadprocess.php" method="post" enctype="multipart/form-data">
<label for="images" class="drop-container">
  <span class="drop-title">Drop files here</span>
  or
  <input type="file" id="images" name="file" required>
  <input type="submit" class="button" value="Upload">
  <a href="download.php" class="btn btn-secondary">View Files</a>
</label>
</form>
