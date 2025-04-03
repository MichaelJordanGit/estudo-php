<?php

//representação de um registro do banco de dados em forma de classe
class Livro
{

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $ano_lancamento;
    public $usuario_id;
    public $imagem;
    public $nota_avaliacao;
    public $count_avaliacoes;

    public function query($where,$params){
        $pdo = new DB;
        $where = ' where ' . $where;
        return $pdo->query("
    select 
        l.id, l.titulo, l.autor, l.descricao, l.ano_lancamento, l.imagem,
        ifnull(round(sum(a.nota) / 5.0), 0) as nota_avaliacao, 
        ifnull(count(a.id), 0) as count_avaliacoes
    from 
        livro l
    left join avaliacoes a on a.livro_id = l.id
        $where
    group by l.id, l.titulo, l.autor, l.descricao, l.ano_lancamento, l.imagem",
                self::class, $params);
    }

    public static function get($id)
    {
        return (new self)->query('l.id = :id',['id' => $id])->fetch();
    }

    public static function all($filtro = '')
    {
        return (new self)->query('titulo like :filtro',['filtro' => "%$filtro%"])->fetchAll();

    }

    public static function meus($usuario_id)
    {
        return (new self)->query('l.usuario_id = :usuario_id',['usuario_id' => $usuario_id])->fetchAll();

        
    }
}
