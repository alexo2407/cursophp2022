<?php


/*
1-lunes
2-martes
3-miercoles
4-jueves
5-viernes
6-sabado
7-domingo

*/

$numero = "Domingo";

switch ($numero) {
    case 1:
        echo "Hoy es Lunes";
        break;
    case 2:
        echo "Hoy es Martes";
        break;
    case 3:
        echo "Hoy es Miercoles";
        break;
    case 4:
        echo "Hoy es Jueves";
        break;
    case 5:
        echo "Hoy es viernes";
        break;
    case 6:
        echo "Hoy es sabado";
        break;
    case "Domingo":
        echo "Hoy es domingo";
        break;
    default:
        echo "no se encontro la opcion indicada";
        break;
}
