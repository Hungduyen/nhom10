<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../lib/session.php');
?>

<?php
/**
 * 
 */
class kynang
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert($tenKN)
    {
        $query = "INSERT INTO tblkynang VALUES (NULL,'" . $tenKN . "',1) ";
        $result = $this->db->insert($query);
        if ($result) {
            $alert = "<span class='success'>Thêm kỹ năng thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Thêm kỹ năng thất bại</span>";
            return $alert;
        }
    }

    public function getAllKynang($page = 1, $total = 5)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query = "SELECT * FROM tblkynang limit $tmp,$total";
        $result = $this->db->select($query);
        return $result;
    }

    public function getAll()
    {
        $query = "SELECT * FROM tblkynang WHERE IDHS = 1";
        $result_mysqli = $this->db->select($query);
        if ($result_mysqli) {
            $result = mysqli_fetch_all($result_mysqli, MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }

    public function phantrang($row = 5)
    {
        $query = "SELECT COUNT(*) FROM tblkynang";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }

    //Sửa kỹ năng
    public function update($data)
    {
        $query = "UPDATE tblkynang SET 
        tenKN = '".$data['tenKN']."' WHERE maKN = '".$data['maKN']."'";
        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'>Cập nhật kỹ năng thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Cập nhật kỹ năng thất bại</span>";
            return $alert;
        }
    }

    public function getByIdAdmin($maKN)
    {
        $query = "SELECT * FROM tblkynang where maKN = '$maKN'";
        $result = $this->db->select($query);
        return $result;
    }

    public function getById($maKN)
    {
        $query = "SELECT * FROM tblkynang where maKN = '$maKN' AND IDHS = 1";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
            return $result;
        }
        return false;
    }
}
?>