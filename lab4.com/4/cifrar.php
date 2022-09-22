<?php

Class cifrar{
    public $texto;
    public $salt;
    public $base;
    public $md5;
    public $sha1;
    public $crc;
    public $crypt;
    public $sha2;
    public $sha3;
    public $snefru;
    public $whirl;
    public $haval;

    public function get_texto(){

        return $this->texto;

    }

    public function get_salt(){


        return $this->salt;
    }


    public function settexto($texto){
        $this->texto=$texto;
    }

    public function setsalt($salt){
        $this->salt=$salt;
    }

    public function resultado(){
        $this->base = base64_encode($this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">Base64</td>
            <td>'.$this->base.'</td>
        </tr>
        ';
    }

    public function resultado2(){
        $this->md5 = md5($this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">md5</td>
            <td>'.$this->md5.'</td>
        </tr>
        ';
    }

    public function resultado3(){
        $this->sha1 = sha1($this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">sha1</td>
            <td>'.$this->sha1.'</td>
        </tr>
        ';
    }

    public function resultado4(){
        $this->crc = crc32($this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">crc32</td>
            <td>'.$this->crc.'</td>
        </tr>
        ';
    }

    public function resultado5(){
        $this->crypt = crypt($this->salt,$this->texto);
        return '
        <tr>
            <td scope="row">crypt</td>
            <td>'.$this->crypt.'</td>
        </tr>
        ';
    }

    public function resultado6(){
        $this->sha2 = hash('sha224',$this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">hash-sha224</td>
            <td>'.$this->sha2.'</td>
        </tr>
        ';
    }

    public function resultado7(){
        $this->sha3 = hash('sha512',$this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">hash-sha512</td>
            <td>'.$this->sha3.'</td>
        </tr>
        ';
    }

    public function resultado8(){
        $this->whirl = hash('whirlpool',$this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">hash-whirlpool</td>
            <td>'.$this->whirl.'</td>
        </tr>
        ';
    }

    public function resultado9(){
        $this->snefru = hash('snefru',$this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">hash-snefru</td>
            <td>'.$this->snefru.'</td>
        </tr>
        ';
    }

    public function resultado10(){
        $this->haval = hash('haval128,3',$this->salt.$this->texto);
        return '
        <tr>
            <td scope="row">hash-haval128,3</td>
            <td>'.$this->haval.'</td>
        </tr>
        ';
    }

   



}



?>
