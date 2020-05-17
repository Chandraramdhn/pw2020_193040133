 
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



	$judulbuku = htmlspecialchars($data['judulbuku']);
	$deskripsibuku = htmlspecialchars($data['deskripsibuku']);
	$pengarang = htmlspecialchars($data['pengarang']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$harga = htmlspecialchars($data['harga']);

	$img = uploud();
	if (!$img) {
		return false;
	}

	$query = "INSERT INTO buku
											VALUES
											('','$img','$judulbuku','$deskripsibuku','$pengarang','$penerbit','$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function uploud()
{
	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	if ($error === 4) {
		echo "<script>
					alert('pilih foto terlebih dahulu!');
					</script>";
		return false;
	}

	$ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
	$ekstensiFoto = explode('.', $namaFile);
	$ekstensiFoto = strtolower(end($ekstensiFoto));
	if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
		echo "<script>
					alert('yang anda aploud bukan gambar');
					</script>";
		return false;
	}

	if ($ukuranFile > 1000000) {
		echo "<script>
					alert('ukuran gambar terlalu besar!');
					</script>";
		return false;
	}
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFoto;

	move_uploaded_file($tmpName, '../assets/image/' . $namaFile);
	return $namaFileBaru;
}



function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM buku WHERE ID = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();
	$id = $data["ID"];

	$gambarLama = htmlspecialchars($data['gambarLama']);

	$judulbuku = htmlspecialchars($data['judulbuku']);
	$deskripsibuku = htmlspecialchars($data['deskripsibuku']);
	$pengarang = htmlspecialchars($data['pengarang']);
	$penerbit = htmlspecialchars($data['penerbit']);
	$harga = htmlspecialchars($data['harga']);

	if ($_FILES['foto']['error'] === 4) {
		$img = $gambarLama;
	} else {
		$img = uploud();
	}


	$query = "UPDATE buku SET
							foto = '$img',
							judulbuku = '$judulbuku',
							deskripsibuku = '$deskripsibuku',
							pengarang = '$pengarang',
							penerbit = '$penerbit',
							harga = '$harga'
						WHERE ID = $id
							";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari($keyword)
{
	$query = "SELECT * FROM buku
								WHERE
						judulbuku LIKE '%$keyword%' OR
						deskripsibuku LIKE '%$keyword%' OR
						pengarang LIKE '%$keyword%' OR
						penerbit LIKE '%$keyword%' OR
						harga LIKE '%$keyword%'
						";
	return query($query);
}

function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
						alert('username sudah digunakan');
					</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query_tambah = "INSERT INTO user VALUE('','$username','$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}

?>
