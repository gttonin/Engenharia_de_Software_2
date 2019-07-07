<?php 
session_start();

class Artigos {
    private $connection;

    public function __construct($db){
        $this->connection = $db;
    }

    public function cadastrarArtigo($dadosArtigo)
    {   
        $tituloPostagem = $dadosArtigo['tituloPostagem'];
        $autor = $dadosArtigo['autor'];
        $resumo = $dadosArtigo['resumo'];
        $textoTrabalho = $dadosArtigo['textoTrabalho'];
        $categoria = $dadosArtigo['categoria'];
        $imagem = $dadosArtigo['imagem'];
        date_default_timezone_set('UTC-3');
        $dataPostagem = (string) date('d') . ' de ' . $this->mesPorExtenso(date('m')) . ' de ' . date('Y');
        
        if (!$imagem) {
            $path = './imagemArtigoPadrao.png';
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $imagem = 'data:image/' . $type . ';base64,' . base64_encode($data);
        }

        $query = "INSERT INTO artigo (idAutor, tituloPostagem, autor, resumo, textoPrincipal, categoria, imagem, dataPostagem) VALUES ";
        $query .= "(" . $_SESSION['idUser'] .", '" . $tituloPostagem . "','" . $autor . "','" . $resumo . "','" . $textoTrabalho . "', '" . $categoria . "', '" . $imagem . "', '" . $dataPostagem . "')";

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0)
            return true;
        
        return false;
    }

    private function mesPorExtenso($mes) {
        $mes = (string) $mes;
        switch ($mes) {
            case '01':
                return 'Janeiro';
                break;
            case '02':
                return 'Fevereiro';
                break;
            case '03':
                return 'Março';
                break;
            case '04':
                return 'Abril';
                break;
            case '05':
                return 'Maio';
                break;
            case '06':
                return 'Junho';
                break;
            case '07':
                return 'Julho';
                break;
            case '08':
                return 'Agosto';
                break;
            case '09':
                return 'Setembro';
                break;
            case '10':
                return 'Outubro';
                break;
            case '11':
                return 'Novembro';
                break;
            case '12':
                return 'Dezembro';
                break;
        }
    }

    public function lerArtigosResumidos()
    {
        $query = "SELECT id, idAutor, tituloPostagem, autor,
                         resumo, categoria, imagem, dataPostagem 
                  FROM artigo";

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();

        if ($num > 0) {
            
            $artigosArray = [];
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                extract($row);

                $item = [
                    'id' => $id,
                    'idAutor' => $idAutor,
                    'tituloPostagem' => $tituloPostagem,
                    'autor' => $autor,
                    'resumo' => $resumo,
                    'categoria' => $categoria,
                    'imagem' => $imagem,
                    'dataPostagem' => $dataPostagem
                ];
            
                array_push($artigosArray, $item);
            }
            return $artigosArray;
        }
        return false;
    }
}