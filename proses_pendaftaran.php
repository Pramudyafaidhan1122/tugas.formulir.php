<?php
class pendaftaran{
    public $nama;
    public $email;
    public $password;

    function __construct($nama,$email,$password){
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    function tampilan_biodata(){
        echo $this->nama, "<br>";
        echo $this->email, "<br>";
        echo $this->password;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama = $_post['nama'];
    $email = $_post['email'];
    $password = $_post['password'];

    $tampil = new pendaftaran($nama,$email,$password);
    $tampil->tampilan_biodata();
}