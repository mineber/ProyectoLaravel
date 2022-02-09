<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
   public function __invoke()
   {
    session_start();
    
    if (!isset($_SESSION['productos'])) {
        // return "ha entrado";
        $_SESSION['productos'] = [];
        $file = fopen('productos.txt', 'r');
        while (!feof($file)) { 
            $line = explode("-", fgets($file));
            if (count($line) > 1) {
                $_SESSION['productos'][$line[0]] = array_slice($line, 1);
            }
        }
        fclose($file);
    }
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = isset($_COOKIE['carrito']) ? unserialize(base64_decode($_COOKIE['carrito'])) : [];
    }
    
    if (isset($_REQUEST['idProducto'])) {
        $idProducto = $_REQUEST['idProducto'];
        if (isset($_SESSION['carrito'][$idProducto])) {
            $_SESSION['carrito'][$idProducto]++;
        } else {
            $_SESSION['carrito'][$idProducto] = 1;
        }
    }
    setcookie('carrito', base64_encode(serialize($_SESSION['carrito'])), strtotime("+30days"));
    
    $totalCesta = 0;
    foreach ($_SESSION['carrito'] as $cantidad) {
        $totalCesta += $cantidad;
    }
    return view("index",compact("totalCesta"));
    
   }

   
}
