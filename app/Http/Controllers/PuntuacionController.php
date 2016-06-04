<?php

namespace App\Http\Controllers;


use App\User;
use GuzzleHttp\Client;
use App\Http\Request;

class PuntuacionController extends Controller {

    public function consulta(Request $request)
    {
        $usuario = $request->input('user');
        $Puntaje = $this->consulta_api($usuario);
        return view('resultado', ['puntuacion'=>$puntuacion]);
    }

    private function consulta_api($usuario){
        $cliente   = new Client(['base_uri' => 'http://api.github.com/users/']);
        $response  = $cliente->request('GET', "{$usuario}/events");
        $resultado = json_decode($response->getBody(), true);
        $puntuacion = 0;
        foreach ($resultado as $evento)
        {
            $tipoEvento = $evento['Type'];
            if($tipoEvento=='PushEvent'){
               $puntuacion += 5;
            }
            elseif ($tipoEvento=='CreateEvent') {
              $puntuacion += 4;
            }
            elseif ($tipoEvento=='IssuesEvent') {
              $puntuacion += 3;
            }
            elseif ($tipoEvento=='CommitCommentEvent') {
              $puntuacion += 2;
            }
            else {
              $puntuacion += 1;
            }
        }
        return $puntuacion;
    }

}
?>
