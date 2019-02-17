<?php 
$filepath = realpath(dirname(__FILE__));
//include_once ($filepath.'database.php');
include("../database/database.php");

$db = new database();
?>


<?php 
/**
 * 
 */
class student
{
	private $db;
	public function __construct()
	{
		$this->db = new database();
	}
	public function getStudents(){
		$query = "SELECT * FROM `item_information`";
		$result = $this->db->select($query);
		return $result;

	}

	public function insertItem($item_id,$item_name){
		$item_name = mysqli_real_escape_string($this->db->link, $item_name);
		if (empty($item_name)) {
			$msg = "<div class='alert alert-danger'><strong>Error !!</strong>Item Name Filled musted not be empty..!!</div>";
			return $msg;
		}
		else{
			$item_query = "INSERT INTO `item_information`(`item_id`,`item_name`) VALUES('$item_id','$item_name')";
			$item_insert = $this->db->insert($item_query);

			if ($item_insert) {
				$msg = "<div class='alert alert-success'><strong>Success !</strong>Item Data Inserted Successfully !</div>";
				return $msg;
				
			}else{
				$msg = "<div class='alert alert-danger'><strong>Filled !</strong>Item Data Inserted Unsuccessfully !</div>";
				return $msg;
				
			}
		}

	}

	public function UpdateItem($item_id,$item_name){
		$item_name = mysqli_real_escape_string($this->db->link, $item_name);
		if (empty($item_name)) {
			$msg = "<div class='alert alert-danger'><strong>Error !!</strong>Item Name Filled musted not be empty..!!</div>";
			return $msg;
		}
		else{
			$item_query = "REPLACE INTO `item_information`(`item_id`,`item_name`) VALUES('$item_id','$item_name')";
			$item_insert = $this->db->insert($item_query);

			if ($item_insert) {
				$msg = "<div class='alert alert-success'><strong>Success !</strong>Item Data Inserted Successfully !</div>";
				return $msg;
				
			}else{
				$msg = "<div class='alert alert-danger'><strong>Filled !</strong>Item Data Inserted Unsuccessfully !</div>";
				return $msg;
				
			}
		}

	}

	



}

?>