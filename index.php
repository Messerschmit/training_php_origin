<?php
namespace classUser{
        ini_set('display_errors',1); //включаем вывод ошибок
        error_reporting(E_ALL);     //Выводим все ошибки, возможно что "мусора" будет очень много
    //    class User {
    //        public $name = "Ivanov";
    //        public $password = "password";
    //        public $email = "user@host.com";
    //        public $city = "Dnepr";
    //        
    //        private static $lastName = "Ivanov";
    //        
    //        public function __construct($name, $password, $email, $city) {
    //            $this->name = $name;
    //            $this->password = $password;
    //            $this->email = $email;
    //            $this->city = $city;
    //        }
    //        
    //        public static function setName($lastName1){
    //            self::$lastName = $lastName1;
    //        }
    //        
    //        public static function getName(){
    //            return self::$lastName;
    //        }
    //
    //        public function Hello() {
    //            echo "Hello ! {$this->name} <br>";
    //        }
    //        
    //        public function getInfo(){
    //            $information = "{$this->name}".' '."{$this->password}".' '."{$this->email}". ' '."{$this->city}";
    //            
    //            return $information;
    //        }
    //    }
    //
    //    $admin = new User("Alexey", "12345", "alexey@host.com", "Kiev");
    //    echo "Пользователь: {$admin->getInfo()}";
    //    echo '<br>';
    //    /*    
    //    echo $admin->getName();
    //    
    //    User::setName("Petrov");    
    //    echo User::getName();
    //    
    //    $admin1 = new User("Alexey", "12345", "alexey@host.com", "Kiev");
    //    
    //    $admin2 = new User("Alexey", "12345", "alexey@host.com", "Kiev");
    //    echo $admin1->getName();
    //    echo $admin2->getName();
    //    */
    //    
    //    class Moderator extends User{
    //        public $info;
    //        public $right;
    //        
    //        public function __construct($name, $password, $email, $city, $info, $right) {
    //            parent::__construct($name, $password, $email, $city);
    //            $this->info = $info;
    //            $this->right = $right;
    //        }
    //        
    //        public function getInfo(){
    //            $information = parent::getInfo();
    //            $information .= ' '."{$this->info}".' '."{$this->right}";
    //            return $information;
    //        }
    //    }
    //    
    //    $moder = new Moderator("Andrew", "111", "andr@gmail.com", "Одесса", "Moderator", "true");
    //    
    //     echo "Пользователь: {$moder->getInfo()}";
    //     
    //     class MainUser{
    //         const SOME_CONST = 314;
    //     }
    //     
    //     echo MainUser::SOME_CONST

    abstract class User{
        public $name;
        public $status;
        public $right;
    }

    interface UserMethods{
        public function getStatus();
        public function getRules();
    }

    trait right{
        public function getStatus(){
            echo $this->name.' is '.$this->status.' get admin rights? '.$this->right;
        }
    }

    trait rules{
        public function getRules(){
            echo "<br> Opened all rules.";
        }
    }

    class Admin extends User implements UserMethods{
        private $id;

    //    public function __construct() {
    //        $this->name = 'Ivan';
    //        $this->status = 'Admin';
    //        $this->right = 'true';
    //        $this->id = 1;
    //    }

       public function __construct($name, $status, $right, $id){
            $this->name = $name;
            $this->status = $status;
            $this->right = $right;
            $this->id = $id;
        }

        public function __clone() {
            $this->id = 1;
        }

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }


        use right, rules;

    }
$admin = new Admin("Anton", "Admin", true, 233);

$admin->getStatus();
$admin->getRules();

echo '<hr>';

$admin1 = new Admin("Kirill", "Moderator", true, 234);
$idAdmin1 = $admin1->id;
echo $idAdmin1;
echo '<br>';
$admin1->id = 254;
echo $admin1-> id;
echo '<br>';
$admin1->getStatus();
$admin1->getRules();

$admin2  = clone $admin1;
echo '<br>';
$admin2->getStatus();
$admin2->getRules();
echo $admin2-> id;
}
?>