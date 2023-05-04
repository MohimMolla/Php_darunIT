
<?php
class cruadApp
{
  private $conn;
  public function __construct()
  {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'darundb';
    $this->conn = mysqli_connect($host, $user, $pass, $db);
    if (!$this->conn) {
      die("Database connection Error!!");
    }
  }
  public function addData($data)
  {
    $name = $data['name'];
    $roll = $data['roll'];
    $file = trim($_FILES['file']['name']);
    $temp_name = $_FILES['file']['tmp_name'];
    $querry = "INSERT INTO `student`( `Name`, `Roll`, `Image`) VALUES ('$name','$roll','$file')";
    if (mysqli_query($this->conn, $querry)) {
      move_uploaded_file($temp_name, 'img/'.$file);
      return "Information added successfully";
    }
  }
  public function displayData()
  {
    $query = "SELECT * FROM student";
    if (mysqli_query($this->conn, $query)) {
      $returndata = mysqli_query($this->conn, $query);
      return $returndata;
    }
  }
  public function displayData_byId($id)
  {
    $query = "SELECT * FROM student WHERE ID =$id";
    if (mysqli_query($this->conn, $query)) {
      $returndata = mysqli_query($this->conn, $query);
      $update = mysqli_fetch_assoc($returndata);
      return $update;
    }
  }
  public function updateData($date)
  {
    $u_name = $date['u-name'];
    $u_roll = $date['u-roll'];
    $u_id = $date['u-id'];
    $u_file = $_FILES['u-file']['name'];
    $temp_name = $_FILES['u-file']['tmp_name'];

    // $query="UPDATE student SET Name='$u_name', Roll = '$u_roll', image = '$u_file' whre Id= '$u_id'";
    $query="UPDATE `student` SET `Name`='$u_name',`Roll`='$u_roll',`Image`='$temp_name' WHERE ID='$u_id'";
    if(mysqli_query($this->conn,$query)){
      move_uploaded_file($temp_name,'img/'.$u_file);
      header("location:index.php");
      return "Update file successfully";
    }
  }
  public function deleteData($id){
    $catch_img="SELECT * FROM `student` WHERE ID= $id ";
    $delete_info=mysqli_query($this->conn,$catch_img);
    $query="DELETE FROM `student` WHERE ID = $id";
    if(mysqli_query($this->conn, $query)){
      header("location:index.php");
      return "Delete file successfully";
    }
  }
}
?>