<?php

class depresion{
    public $precio;
    public $vida;
    public $t;
    public $i;
    public $resul;
    public $resul2;


    public function get_precio(){

        return $this->precio;

    }

    public function get_vida(){


        return $this->vida;
    }


    public function setprecio($precio){
        $this->precio=$precio;
    }

    public function setvida($vida){
        $this->vida=$vida;
    }

    public function resultado(){
        $this->t = $this->precio / $this->vida;
        $this->resul = $this->precio;
        $this->resul2 = 0;
        for ($this->i=0;$this->i<=$this->vida;$this->i++){
             echo '
             <tr>
                 <td scope="row">'.$this->i.'</td>
                 <td>'.$this->resul.'</td>
                 <td>'.$this->resul2.'</td>
             </tr>
             ';
             $this->resul = $this->resul-$this->t;
             $this->resul2 = $this->resul2+$this->t;
        }

 }






}

?>