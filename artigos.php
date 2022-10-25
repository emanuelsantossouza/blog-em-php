<?php
    require 'config.php';

    class artigo1 {
        private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this -> mysql - $mysql;
    }

    public function exibirtodos(): array
    {
        $resultado = this -> mysql -> query('SELECT ID, TITULO, CONTEUDO FROM ARTIGOS');
        $artigo1 = $resultado -> fetch_all(MYSQL_ASSOC);

        return $artigo1;
    }
}


/*
    $artigo1= [
        ['titulo' => 'Primeiros passos com Spring',
        'conteudo' => 'Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
        programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.',
        'link' => 'primeiros-passos-com-spring.html'
    ],
        [
            'titulo' => 'O que é Metodologia Ágil?',
            'conteudo' => 'Uma vez fui contratada por uma empresa que desenvolvia softwares e aplicativos para outras empresas.',
            'link' => 'o-que-e-metodologia-agil.html'
        ],  
        [
            'titulo' => 'Como é o funil do Growth Hacking?',
            'conteudo' => 'Minha amiga que possui um clube de assinaturas começou a utilizar o Growth Hacking após conhecer um pouco
            mais sobre ele.',
            'link' => 'como-e-o-funil-do-growth-hacking.html'
        ],
        [
            'titulo' => 'Bom Dia',
            'conteudo' => 'jogo',
            'link' => 'oi turu bem? quero comer'
        ]
    ];
*/
?>
