<?php 

class courseController
{
    public $courseModel;

    public function __construct() {
        $this->courseModel = new course();
    }

    public function list() {
        $courses=$this->courseModel->list();
        require_once './views/list.php';
    }
    public function delete (){
        $id = $_GET['id'];
        $this->courseModel->delete($id);
        header('location: index.php?act=list');
    }
    public function create(){
        if(isset($_POST['them'])){
            $name = $_POST['name'];
            $instructor = $_POST['instructor'];
            $duration = $_POST['duration'];
            $price = $_POST['price'];
            
            if(isset($_FILES['thumbnail'])){
                $thumbnail = time().$_FILES['thumbnail']['name'];
                $from = $_FILES['thumbnail']['tmp_name'];
                $to = PATH_ROOT . '/uploads/' . basename($thumbnail);
                move_uploaded_file($from,$to);
            }else{
                $thumbnail = null;
            }
            $this->courseModel->create($name,$instructor,$duration,$price,$thumbnail);
            header('location: index.php?act=list');

        }
        require_once './views/create.php';
    }
    
}