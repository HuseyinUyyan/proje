<?php
class AdminUsersClass{
    protected $pdo=null;
    protected $host="localhost";
    protected $dbname="proje";
    protected $username="root";
    protected $password="";
    protected $charset="utf8";
    

    public function __construct()
    {
        try {
            $this->pdo=new pdo("mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset", $this->username, $this->password);
            print 'Veri Tabanı Baglantısı Saglanıldı';
        } catch (PDOException $error) {
            die($error->getMessage());
        }
        
    }
    public function getuser($mail){
        $query=$this->pdo->prepare('SELECT * FROM kullanicikayit WHERE eMail=?');
        $query->execute([$mail]);
        $variable= $query->fetch(PDO::FETCH_ASSOC);
        if($variable){
            return $variable;
        }else{
            return false;
        }
    }
    public function getSecurity($data){
        if (is_array($data)) {

            $variable=array_map('htmlspecialchars', $data);
            $response =array_map('stripslashes', $variable);
            return $response;
        }else {
            $variable = htmlspecialchars($data);
            $response = stripslashes($variable);
            return $response;
        }
    }
}
 


 ?>