<?php   

class Partido{
    public $Id;
    public $EquipoLocal;
    public $EquipoVisitante;
    public $FechaPartido;
    public $Arbitro;

    public function MostrarDatos(){
        echo '_Datos del partido: '.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo '##Datos del equipo local: <br>';
        echo 'Id: '.$this->EquipoLocal->Id.'<br>';
        echo 'Id: '.$this->EquipoLocal->NombreEquipo.'<br>';
        echo '##Datos jugadores del local: <br>';
        foreach($this->EquipoLocal->ListaJugadores as $Lj){
            echo 'Id: '.$Lj->Id.'<br>';
            echo 'Nombre: '.$Lj->Nombre.'<br>';
            echo 'Apellido: '.$Lj->Apellido.'<br>';
        }
        echo '##Datos DT:<br>';
        echo 'Id: '.$this->EquipoLocal->DirectorTecnico->Id.'<br>';
        echo 'Nombre: '.$this->EquipoLocal->DirectorTecnico->Nombre.'<br>';
        echo 'Apellido: '.$this->EquipoLocal->DirectorTecnico->Apellido.'<br>';
        echo '##Datos del equipo visitante: <br>';
        echo 'Id: '.$this->EquipoVisitante->Id.'<br>';
        echo 'Nombre: '.$this->EquipoVisitante->NombreEquipo.'<br>';
        echo '##Datos jugadores del visitante: <br>';
        foreach ($this->EquipoVisitante->ListaJugadores as $Lj){
            echo 'Id: '.$Lj->Id.'<br>';
            echo 'Nombre: '.$Lj->Nombre.'<br>';
            echo 'Apellido: '.$Lj->Apellido.'<br>'; 
        }
        echo '##Datos DT: <br>';
        echo 'Id: '.$this->EquipoVisitante->DirectorTecnico->Id.'<br>';
        echo 'Nombre: '.$this->EquipoVisitante->DirectorTecnico->Nombre.'<br>';
        echo 'Apellido: '.$this->EquipoVisitante->DirectorTecnico->Apellido.'<br>';
        echo 'Fecha del partido: '.$this->FechaPartido.'<br>';
        echo '##Datos del arbitro: <br>';
        echo 'Id: '.$this->Arbitro->Id.'<br>';
        echo 'Nombre: '.$this->Arbitro->Nombre.'<br>';
        echo 'Apellido: '.$this->Arbitro->Apellido.'<br>';
        echo 'Gremio: '.$this->Arbitro->Gremio.'<br>';
    }
}
