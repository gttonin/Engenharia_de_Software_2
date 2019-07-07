<?php
session_start();

require_once 'Crud.php';

class Contato extends Crud{

    protected $table = 'mensagensContato';

    private $nome;
    private $email;
    private $assunto;
    private $mensagem;

    function __construct() {
        $a = func_get_args();
        $i = func_num_args();// Pega o numero de parametros da função
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct1($id){
        $this->find($id);
    }

    function __construct4($nome, $email, $assunto, $mensagem){
        $this->nome         = $nome;
        $this->email        = $email;
        $this->assunto      = $assunto;
        $this->mensagem     = $mensagem;
    }

    public function insert(){
        $sql  = "INSERT INTO $this->table (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)";
        $stmt = DB::prepare($sql);

        $stmt->bindParam(':nome',               $this->nome);
        $stmt->bindParam(':email',              $this->email);
        $stmt->bindParam(':assunto',            $this->assunto);
        $stmt->bindParam(':mensagem',           $this->mensagem);

        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
        return false;
	}

    public function update($id){

	}

    public function delete($id){
        $sql  = "DELETE FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

		try {
			$stmt->execute();

            return true;
		} catch (\Exception $e) {
			return false;
		}
	}

    public function find($id){
        $sql  = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $contato = $stmt->fetch();

        $this->nome         = $contato->nome;
        $this->email        = $contato->email;
        $this->assunto      = $contato->assunto;
        $this->mensagem     = $contato->mensagem;
    }
}
