<?php

class alumnos{
 public $alumnos;
 public $alumnas; 
public $total;
public $totalh;
public $totalm;


public function get_alumnos1(){

    return $this->alumnos1;

}

public function get_alumnas(){


    return $this->alumnas;
}


public function setalumnos1($alumnos1){
    $this->alumnos1=$alumnos1;
}

public function setalumnas($alumnas){
    $this->alumnas=$alumnas;
}

public function resultado(){
    $this->total = $this->alumnos1+$this->alumnas;
    $this->totalh = ($this->alumnos1 / $this->total)*100;
    $this->totalm = ($this->alumnas / $this->total)*100;
    return '
    <tr>
        <th scope="row">Alumnos</th>
        <th scope="row">'.$this->alumnos1.'</th>
        <th scope="row">'.$this->totalh.'</th>
        
</tr>
    <tr>
    <th scope="row">Alumnas</th>
    <th scope="row">'.$this->alumnas.'</th>
    <th scope="row">'.$this->totalm.'</th>
</tr>
</tbody> ';
    
}


}



?>