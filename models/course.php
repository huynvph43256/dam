<?php 

// Tham khảo execute ở đây: https://www.php.net/manual/en/pdostatement.execute.php - Ex: 2
class course
{
    public $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    // Lấy toàn bộ dữ liệu
    public function list() {
       $sql = "SELECT * FROM courses";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute();
       return $stmt->fetchAll();      
    }
    public function delete($id) {
        $sql = "DELETE FROM courses WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    public function create($name,$instructor,$duration,$price,$thumbnail){
        $sql = "INSERT INTO courses (name,instructor,duration,price,thumbnail)
         VALUES ('$name','$instructor','$duration','$price','$thumbnail')";
         $stmt = $this->conn->prepare($sql);
         return $stmt->execute();
    }
}