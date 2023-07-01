<?php

require_once 'modelo/arbitro.php';
require_once 'modelo/directortecnico.php';
require_once 'modelo/equipo.php';
require_once 'modelo/jugadores.php';
require_once 'modelo/partido.php';

$a = new Arbitro;
$a->Id=1;
$a->Nombre='Nestor';
$a->Apellido='Pitana';
$a->Gremio='AEC';

$dt1 = new DirectorTecnico;
$dt1->Id=1;
$dt1->Nombre='Pipo';
$dt1->Apellido='Gorosito';

$dt2 = new DirectorTecnico;
$dt2->Id=2;
$dt2->Nombre='Leonel';
$dt2->Apellido='Scaloni';

$j1 = new Jugadores;
$j1->Id=1;
$j1->Nombre='Leonel';
$j1->Apellido='Messi';

$j2 = new Jugadores;
$j2->Id=2;
$j2->Nombre='Angel';
$j2->Apellido='Di Maria';

$j3 = new Jugadores;
$j3->Id=3;
$j3->Nombre='Rodrigo';
$j3->Apellido='De Paul';

$j4 = new Jugadores;
$j4->Id=4;
$j4->Nombre='Leandro';
$j4->Apellido='Paredes';

$eq1 = new Equipo;
$eq1->Id=1;
$eq1->NombreEquipo='Argentina';
$eq1->ListaJugadores[]=$j1;
$eq1->ListaJugadores[]=$j2;
$eq1->DirectorTecnico=$dt2;

$eq2 = new Equipo;
$eq2->Id=2;
$eq2->NombreEquipo='Paraguay';
$eq2->ListaJugadores[]=$j3;
$eq2->ListaJugadores[]=$j4;
$eq2->DirectorTecnico=$dt1;

$p = new Partido;
$p->Id=1;
$p->EquipoLocal=$eq2;
$p->EquipoVisitante=$eq1;
$p->FechaPartido='19/05/2022';
$p->Arbitro=$a;

$p->MostrarDatos();