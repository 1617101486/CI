<?php
class crud{
//fungsi koneksi di oop
	public function __construct(){
		$this->konek= new mysqli("localhost","root","","db_tahfidz_quran") or die("Count error");
	}

//fungsi untuk mengisi/menginput data ke table di databse
	
	public function ustadz(){
		$query="SELECT COUNT(id_ustadz) AS h_ustadz FROM tb_ustadz";
		$sql=$this->konek->query($query) or die ("Error Hitung Ustadz");	
		return $sql;
	}

	public function siswa(){
		$query="SELECT COUNT(id_siswa) AS h_siswa FROM tb_siswa";
		$sql=$this->konek->query($query) or die ("Error Hitung Siswa");	
		return $sql;
	}
	public function kelas(){
		$query="SELECT COUNT(id_kelas) AS h_kelas FROM tb_kelas";
		$sql=$this->konek->query($query) or die ("Error Hitung Siswa");	
		return $sql;
	}
	
}
?>