<?php
/**
 * Created by PhpStorm.
 * User: Daniel Risi
 * Date: 31/07/2018
 * Time: 11:20
 */

namespace App\Services;


use App\Repositories\Admin\TipoRepository;

class AuxiliarService
{


    public function converteDataToBanco($str){
        $data = explode('/',$str);
        $dataformatada = $data[2].'-'.$data[1].'-'.$data[0];
        return $dataformatada;
    }

    public function converteMoedaToBanco($valor){
        if(!empty($valor)){
            $valor = str_replace('.', '', $valor);
            $valor = str_replace(',', '.', $valor);
        }
        return (double) $valor;
    }

    public function formatWithoutRS($valor){
        if(!empty($valor)){
            $valor = str_replace('R$ ','',$valor);
            $valor = str_replace('.', '', $valor);
            $valor = str_replace(',', '.', $valor);
        }
        return (double) $valor;
    }

    public function formatRS($valor) {
        return "R$ ".number_format($valor, 2, ",", ".");
    }

    public function getPeriodo($valor){
        $periodos = [
          1 => 'Indeterminado',
          2 => '1 mês',
          3 => '6 meses',
          4 => '1 ano',

        ];
        return $periodos[$valor];
    }

    public function getTipos($valor){
       $tipos = $this->tipoRepository->pluck('nome','id');
        return $tipos[$valor];
    }

    public function limpatelefone($str){
        $novotelefone = preg_replace("/[^0-9]/","",$str);
        return $novotelefone;
    }


}