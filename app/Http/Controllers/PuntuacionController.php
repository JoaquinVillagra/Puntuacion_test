<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use GuzzleHttp\Client;

class PuntuacionController extends Controller
{
    public function consulta(Request $request)
    {
        $usuario = $request->input('user');
        /* Consulta puntuacion del usuario según la versión 1 */
        $puntajeEventos = $this->consultaApiVersion1($usuario);
        $seguidores = obtenerSeguidores($usuario);
        $estrellas  = obtenerEstrellas($usuario);
        /* Se calcula el puntaje total del usuario*/
        $puntaje = 0,4 * $puntajeEventos + 0,2 * $seguidores + 0,4 * $estrellas;
        return view('resultado', compact("puntaje, seguidores, estrellas"));
    }

    private function consultaApiVersion1($usuario)
    {
        $cliente   = new Client([
            'base_uri' => 'https://api.github.com/users/'
        ]);
        $response  = $cliente->request('GET', "{$usuario}/events");
        $resultado = json_decode($response->getBody(), true);
        $puntuacion = 0;
        foreach ($resultado as $evento) {
            $tipoEvento = $evento['type'];
            if ($tipoEvento=='PushEvent') {
                $puntuacion += 5;
            } elseif ($tipoEvento=='CreateEvent') {
                $puntuacion += 4;
            } elseif ($tipoEvento=='IssuesEvent') {
                $puntuacion += 3;
            } elseif ($tipoEvento=='CommitCommentEvent') {
                $puntuacion += 2;
            } else {
                $puntuacion += 1;
            }
        }
        return $puntuacion;
    }

    private function obtenerSeguidores($usuario)
    {
        $cliente   = new Client([
            'base_uri' => 'https://api.github.com/users/'
        ]);
        $response  = $cliente->request('GET', "{$usuario}");
        $resultado = json_decode($response->getBody(), true);
        $numeroSeguidores = $response['followers'];
        return $numeroSeguidores;
    }

    private function obtenerEstrellas($usuario)
    {
        $cliente   = new Client([
            'base_uri' => 'https://api.github.com/users/'
        ]);
        $response  = $cliente->request('GET', "{$usuario}");
        $resultado = json_decode($response->getBody(), true);
        $numeroEstrellas = $response['followers'];
        return $numeroEstrellas;
    }
}
