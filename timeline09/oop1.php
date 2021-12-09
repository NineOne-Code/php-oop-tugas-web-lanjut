<?php
class Identitas
{
    var $nama;
    var $jurusan;

    function tampil_nama()
    {
        return "nama saya john \n";
    }

    function tampil_jurusan()
    {

        return "Teknik Informatika";
    }
}


$orang = new Identitas();

echo $orang->tampil_nama();
echo $orang->tampil_jurusan();
