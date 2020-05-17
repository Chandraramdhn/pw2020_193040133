
<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040133") or die("database salah");
	return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//function untuk melakukan koneksi ke database
function tambah($data)
{
	$conn = koneksi();

	$img = htmlspecialchars($data['foto']);
	$judulbuku = htmlspecialchars($data['judulbuku']);
	$deskripsibuku = htmlspecialchars($data['deskripsibuku']);
	$pengarang = htmlspecialchars($data['pengarang']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO buku
											VALUES
											('','$img','$judulbuku','$deskripsibuku','$pengarang','$penerbit','$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM buku WHERE ID = $id");

	return mysqli_affected_rows($conn);
}
?>
