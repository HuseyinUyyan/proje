<?php
class UsersClass{
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
        if (isset($_SESSION['eMail']) && isset($_SESSION['login'])) {
            header("location:index.php");
        }
        
    }
    public function getUSER($eMail){
        $query=$this->pdo->prepare('SELECT * FROM musteri WHERE eMail =?');
         $query->execute([$eMail]);
         $variable= $query->fetch(PDO::FETCH_ASSOC);
         if ($variable) {
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