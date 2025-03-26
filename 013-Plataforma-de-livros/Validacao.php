<?php

class Validacao
{
    public $validacoes = [];



    public static function validar($regras, $dados)
    {
        $validacao = new self;
        foreach ($regras as $campo => $regrasCampo) {
            foreach ($regrasCampo as $regra) {


                $valorCampo = $dados[$campo];
                if ($regra == 'confirmed') {
                    $validacao->$regra($campo, $valorCampo, $dados["{$campo}_confirmacao"]);
                } elseif (str_contains($regra, ':')) {
                    $temp = explode(':', $regra);
                    $regra = $temp[0];
                    $regraArg = $temp[1];
                    $validacao->$regra($regraArg, $campo, $valorCampo);
                } else {
                    $validacao->$regra($campo, $valorCampo);
                }
            }
        }
        return $validacao;
    }
    private function unique($tabela, $campo, $valor)
    {
        if (strlen($valor) == 0) {
            return;
        }
        $pdo = new DB(conexao('database'));
        $resultado = $pdo->query(
            query: "SELECT * FROM $tabela WHERE $campo = :valor",
            params: ['valor' => $valor]
        )->fetch();

        if($resultado){
            $this->validacoes[] = "o $campo ja esta sendo usando. ";
        }
    }
    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->validacoes[] = "O $campo é obrigatorio";
        }
    }
    private function email($campo, $valor)
    {
        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes[] = "O $campo é invalido";
        }
    }

    private function min($min, $campo, $valor)
    {
        if (strlen($valor) <= $min) {
            $this->validacoes[] = "O $campo precisa ter no minimo de $min caracteres";
        }
    }

    private function max($max, $campo, $valor)
    {
        if (strlen($valor) >= $max) {
            $this->validacoes[] = "O $campo precisa ter no minimo de $max caracteres";
        }
    }

    private function strong($campo, $valor)
    {
        if (! strpbrk($valor, '!@#$%¨&*()?_-=+/|\?><:')) {
            $this->validacoes[] = "A $campo deve ter pelo menos um caractere especial";
        }
    }

    private function confirmed($campo, $valor, $valorConfirmacao)
    {

        if ($valor != $valorConfirmacao) {
            $this->validacoes[] = "O $campo não conferem. Verifique!!!";
        }
    }

    public function naoPassou($nomeCustomizado = null)
    {
        $chave = 'validacoes';
        if ($nomeCustomizado) {
            $chave .= '_' . $nomeCustomizado;
        }
        flash()->push($chave, $this->validacoes);

        return sizeof($this->validacoes) > 0;
    }
}
