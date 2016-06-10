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
        /* comentario */
        $puntaje = $this->consultaApi($usuario);
        return view('resultado', compact("puntaje"));
    }

    private function consultaApi($usuario)
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
}
