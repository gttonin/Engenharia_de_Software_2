<?php
session_start();

require_once 'Crud.php';

class Usuario extends Crud{

    protected $table = 'usuario';
    protected $tableArtigo = 'artigo';

    private $id;
    private $primeiroNome;
    private $ultimoNome;
    private $numeroDocumento;
    private $tipoDocumento;
    private $tipoUsuario;
    private $entidade;
    private $email;
    private $telefone;
    private $celular;
    private $endereco;
    private $bairro;
    private $estado;
    private $pais;
    private $lattes;
    private $linkedin;
    private $twitter;

    function __construct() {
        $a = func_get_args();
        $i = func_num_args();// Pega o numero de parametros da função
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct0(){
        $this->id = "";
        $this->primeiroNome = "";
        $this->ultimoNome = "";
        $this->numeroDocumento = "";
        $this->tipoDocumento = "";
        $this->tipoUsuario = "";
        $this->entidade = "";
        $this->email = "";
        $this->telefone = "";
        $this->celular = "";
        $this->endereco = "";
        $this->bairro = "";
        $this->estado = "";
        $this->pais = "";
        $this->lattes = "";
        $this->linkedin = "";
        $this->twitter = "";
    }

    function __construct1($id){
        $this->id = "";
        $this->primeiroNome = "";
        $this->ultimoNome = "";
        $this->numeroDocumento = "";
        $this->tipoDocumento = "";
        $this->tipoUsuario = "";
        $this->entidade = "";
        $this->email = "";
        $this->telefone = "";
        $this->celular = "";
        $this->endereco = "";
        $this->bairro = "";
        $this->estado = "";
        $this->pais = "";
        $this->lattes = "";
        $this->linkedin = "";
        $this->twitter = "";

        $this->find($id);
    }

    function __construct16($primeiroNome, $ultimoNome, $numeroDocumento, $tipoDocumento, $tipoUsuario, $entidade, $email, $telefone, $celular, $endereco, $bairro, $estado, $pais, $lattes, $linkedin, $twitter){
        $this->id = "";
        $this->primeiroNome = $primeiroNome;
        $this->ultimoNome = $ultimoNome;
        $this->numeroDocumento = $numeroDocumento;
        $this->tipoDocumento = $tipoDocumento;
        $this->tipoUsuario = $tipoUsuario;
        $this->entidade = $entidade;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->pais = $pais;
        $this->lattes = $lattes;
        $this->linkedin = $linkedin;
        $this->twitter = $twitter;
    }

    public function getId(){
        return $this->id;
    }

    public function getPrimeiroNome(){
        return $this->primeiroNome;
    }

    public function setPrimeiroNome($primeiroNome){
        $this->primeiroNome = $primeiroNome;
    }

    public function getUltimoNome(){
        return $this->ultimoNome;
    }

    public function setUltimoNome($ultimoNome){
        $this->ultimoNome = $ultimoNome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email= $email;
    }

    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }

    public function setNumeroDocumento($numeroDocumento){
        $this->numeroDocumento = $numeroDocumento;
    }

    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }

    public function setTipoDocumento($tipoDocumento){
        $this->tipoDocumento = $tipoDocumento;
    }

    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }

    public function setTipoUsuario($tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;
    }

    public function getEntidade(){
        return $this->entidade;
    }

    public function setEntidade($entidade){
        $this->entidade = $entidade;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }

    public function getEndereco(){
        return  $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getPais(){
        return $this->pais;
    }

    public function setPais($pais){
        $this->pais = $pais;
    }

    public function getLattes(){
        return $this->lattes;
    }

    public function setLattes($lattes){
        $this->lattes = $lattes;
    }

    public function getLinkedin(){
        return $this->linkedin;
    }

    public function setLinkedin($linkedin){
        $this->linkedin = $linkedin;
    }

    public function getTwitter() {
        return $this->twitter;
    }

    public function setTwitter($twitter) {
        $this->twitter = $twitter;
    }

    public function insert(){
        $sql  = "INSERT INTO $this->table (primeiroNome, ultimoNome, numeroDocumento, tipoDocumento, tipoUsuario, entidade, email, telefone, celular, endereco, bairro, estado, pais, lattes, linkedin, twitter) VALUES (:primeiroNome, :ultimoNome, :numeroDocumento, :tipoDocumento, :tipoUsuario, :entidade, :email, :telefone, :celular, :endereco, :bairro, :estado, :pais, :lattes, :linkedin, :twitter)";
        $stmt = DB::prepare($sql);

        $stmt->bindParam(':primeiroNome',           $this->primeiroNome);
        $stmt->bindParam(':ultimoNome',             $this->ultimoNome);
        $stmt->bindParam(':numeroDocumento',        $this->numeroDocumento);
        $stmt->bindParam(':tipoDocumento',          $this->tipoDocumento);
        $stmt->bindParam(':tipoUsuario',            $this->tipoUsuario);
        $stmt->bindParam(':entidade',               $this->entidade);
        $stmt->bindParam(':email',                  $this->email);
        $stmt->bindParam(':telefone',               $this->telefone);
        $stmt->bindParam(':celular',                $this->celular);
        $stmt->bindParam(':endereco',               $this->endereco);
        $stmt->bindParam(':bairro',                 $this->bairro);
        $stmt->bindParam(':estado',                 $this->estado);
        $stmt->bindParam(':pais',                   $this->pais);
        $stmt->bindParam(':lattes',                 $this->lattes);
        $stmt->bindParam(':linkedin',               $this->linkedin);
        $stmt->bindParam(':twitter',                $this->twitter);

        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
        return false;
	}

    public function update($id){
		$sql  = "UPDATE $this->table SET primeiroNome = :primeiroNome, ultimoNome = :ultimoNome, numeroDocumento = :numeroDocumento, tipoDocumento = :tipoDocumento, tipoUsuario = :tipoUsuario, entidade = :entidade, email = :email, telefone = :telefone, celular = :celular, endereco = :endereco, bairro = :bairro, estado = :estado, pais = :pais, lattes = :lattes, linkedin = :linkedin, twitter = :twitter WHERE id = :id";

        $stmt = DB::prepare($sql);

        $stmt->bindParam(':primeiroNome',           $this->primeiroNome);
        $stmt->bindParam(':ultimoNome',             $this->ultimoNome);
        $stmt->bindParam(':numeroDocumento',        $this->numeroDocumento);
        $stmt->bindParam(':tipoDocumento',          $this->tipoDocumento);
        $stmt->bindParam(':tipoUsuario',            $this->tipoUsuario);
        $stmt->bindParam(':entidade',               $this->entidade);
        $stmt->bindParam(':email',                  $this->email);
        $stmt->bindParam(':telefone',               $this->telefone);
        $stmt->bindParam(':celular',                $this->celular);
        $stmt->bindParam(':endereco',               $this->endereco);
        $stmt->bindParam(':bairro',                 $this->bairro);
        $stmt->bindParam(':estado',                 $this->estado);
        $stmt->bindParam(':pais',                   $this->pais);
        $stmt->bindParam(':lattes',                 $this->lattes);
        $stmt->bindParam(':linkedin',               $this->linkedin);
        $stmt->bindParam(':twitter',                $this->twitter);
        $stmt->bindParam(':id',                     $id, PDO::PARAM_INT);

        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
		return false;
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

        $usuario = $stmt->fetch();

        $this->id                   = $usuario->id;
        $this->primeiroNome         = $usuario->primeiroNome;
        $this->ultimoNome           = $usuario->ultimoNome;
        $this->numeroDocumento      = $usuario->numeroDocumento;
        $this->tipoDocumento        = $usuario->tipoDocumento;
        $this->tipoUsuario          = $usuario->tipoUsuario;
        $this->entidade             = $usuario->entidade;
        $this->email                = $usuario->email;
        $this->telefone             = $usuario->telefone;
        $this->celular              = $usuario->celular;
        $this->endereco             = $usuario->endereco;
        $this->bairro               = $usuario->bairro;
        $this->estado               = $usuario->estado;
        $this->pais                 = $usuario->pais;
        $this->lattes               = $usuario->lattes;
        $this->linkedin             = $usuario->linkedin;
        $this->twitter              = $usuario->twitter;

    }

    public function getArtigos(){
        $sql  = "SELECT * FROM $this->tableArtigo WHERE idAutor = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        $stmt->execute();

        $artigos = $stmt->fetchAll();

        return $artigos;
    }

    public function validaUsuario($dadosUsuarioLogin) {
        $query = "SELECT id, primeiroNome, email FROM $this->table WHERE email = :email AND senha = :senha";

        $stmt = DB::prepare($query);
        $stmt->bindParam(':email',      $dadosUsuarioLogin['email']);
        $stmt->bindParam(':senha',      $dadosUsuarioLogin['password']);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $idUser;
            $nomeUser;
            $emailUser;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);

                $idUser = $id;
                $nomeUser = $primeiroNome;
                $emailUser = $email;
            }

            session_start();
            $_SESSION['idUser'] = $idUser;
            $_SESSION['nomeUser'] = $nomeUser;
            $_SESSION['emailUser'] = $emailUser;

            return true;
        }
        return false;
    }
}
