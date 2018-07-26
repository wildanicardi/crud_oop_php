<?php 
	/**
	 * 
	 */
class Crud extends mysqli{
		
	public function __construct()
		{
			$config = include 'config/config.php';
			#berfungsi menjalankan construct pada parentnya
			parent ::__construct($config['host'],$config['user'],$config['password'],$config['database']);
		}
	public function lihatData(){
		#mengambil data dari database
		$result =$this->query("SELECT * FROM crudphp ORDER BY id DESC");
		$hasil = array();

		#menampilkan data dari database
		while ($row = $result ->fetch_assoc()) {
			$hasil[] = $row;
		}
		return $hasil;
	}
	public function tambahdata($data)
	{
		$perintah = "INSERT INTO crudphp (";
		foreach ($data as $row => $value) {
			$perintah .= $row." , " ;
		}
		$perintah = substr($perintah, 0,-2).") VALUES (";
		foreach ($data as $key => $value) {
			$perintah .= "'$value', ";
		}
		$perintah = substr($perintah, 0,-2).")";
		if ($this->query($perintah)) {
			echo "SUKSES";
		}
		else{
			echo "GAGAL";
		}
	}
}
 ?>