<?php
  class Model {
    protected $connected;
    // Соединям базу данных Mysql
    public function __construct() {
    $this->connected    = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Connected not server');
}
   /**Проверяем на пустоту комнаты */
     public function isEmpty() {
      $datend= $_POST['datend'];
      $datestart = $_POST['datestart'];
      $room = $_POST['room'];
      if($datend>$datestart) {
      $result  = mysqli_query($this->connected,"SELECT `datestart`,`datend`,`room` FROM `roomtab` WHERE (`room`=$room) && 
      (`datestart`< '{$datend}') && ('{$datestart}'< `datend`)");
      $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
      return empty($rows);
      }
    }

    // Очищаем html данные 
    public function clean($value = "") {
      $value = trim($value);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      return $value;
  } 
  // Вставляем данные
    public function insertData() {
      if(isset($_POST['submit'])) {
        $name =  mysqli_real_escape_string($this->connected,$this->clean($_POST['name']));
        $phone =  mysqli_real_escape_string($this->connected,$this->clean($_POST['phone']));
        $room =  mysqli_real_escape_string($this->connected,$this->clean($_POST['room']));
        $email =  mysqli_real_escape_string($this->connected,$this->clean($_POST['email']));
        $datestart = mysqli_real_escape_string($this->connected,$this->clean($_POST['datestart']));
        $datend = mysqli_real_escape_string($this->connected,$this->clean($_POST['datend']));
        $date = date('Y-m-d H:i:s');
        if($this->isEmpty()) {
        $insert = "INSERT INTO `roomtab` (name,phone,room,email,datestart,datend,date)
        VALUES ('$name','$phone','$room','$email','$datestart','$datend','$date')";
        
        if (mysqli_query($this->connected, $insert)) {
        return "<h1>Место успешно бронировано! Ваше E-mail и телефон номер отправлено уведомления</h1>";
     } 
        else {
        return "Error: " . $insert . ":-" . mysqli_error($this->connected);
     }
    } else {
      return "<h1>Место занял {$name} до {$datend}</h1>";
    }
     mysqli_close($this->connected);
      }
    }
  }
?>