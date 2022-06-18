<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/session.php');
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../lib/PHPMailer.php');
include_once($filepath . '/../lib/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
?>

<?php
/**
 * 
 */
class taikhoan
{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}

	public function login($email, $password)
	{
		$query = "SELECT * FROM tblnhanvien WHERE email = '$email' AND password = '$password' LIMIT 1 ";
		$result = $this->db->select($query);
		if ($result) {
			$value = $result->fetch_assoc();
			Session::set('user', true);
			Session::set('quyen', $value['quyen']);
			header("Location:index.php");
		} else {
			$alert = "Tên đăng nhập hoặc mật khẩu không đúng!";
			return $alert;
		}
	}

	public function get()
	{
		$userId = Session::get('userId');
		$query = "SELECT * FROM users WHERE id = '$userId' LIMIT 1";
		$mysqli_result = $this->db->select($query);
		if ($mysqli_result) {
			$result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
			return $result;
		}
		return false;
	}

	public function getLastUserId()
	{
		$query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
		$mysqli_result = $this->db->select($query);
		if ($mysqli_result) {
			$result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
			return $result;
		}
		return false;
	}

	public function confirm($userId, $captcha)
	{
		$query = "SELECT * FROM users WHERE id = '$userId' AND captcha = '$captcha' LIMIT 1";
		$mysqli_result = $this->db->select($query);
		if ($mysqli_result) {
			// Update comfirmed
			$sql = "UPDATE users SET isConfirmed = 1 WHERE id = $userId";
			$update = $this->db->update($sql);
			if ($update) {
				return true;
			}
		}
		return 'Mã xác minh không đúng!';
	}
}
?>