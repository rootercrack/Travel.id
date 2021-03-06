<?php
class Member
{
    //member1 var
    private $koneksi;

    //member2 konstruktor
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    //member3 method
    public function checkLogin($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND
                password = SHA1(MD5(?))";

        //prepare statemnt
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}