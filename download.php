<link rel="stylesheet" href="download.css">
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
<div class="tbl-header">
<table>
  <tr>
    <th>File ID</th>
    <th>File Name</th>
    <th>Download</th>
  </tr>
</table>
  </div>
  <div class="tbl-content">
    <table>

</div>
  <?php
  //connect to the database
  $conn = mysqli_connect("localhost", "root", "", "test");
  $query = "SELECT * FROM doc";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $file_id = $row["id"];
    $file_name = $row["file_name"];
    $file_path = $row["file_path"];
    $original_file_name = $row["file_name"];
    echo "<tr>";
    echo "<td>$file_id</td>";
    echo "<td>$file_name</td>";
    echo "<td><a href='$file_path' download='$original_file_name'>Download</a></td>";
    echo "</tr>";
}