<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../lib/session.php');
?>

<?php
/**
 * 
 */
class linhvuc
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert($tenLinhVuc)
    {
        $query = "INSERT INTO tbllinhvuc VALUES (NULL,'" . $tenLinhVuc . "') ";
        $result = $this->db->insert($query);
        if ($result) {
            $alert = "<span class='success'>Thêm lĩnh vực thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Thêm lĩnh vực thất bại</span>";
            return $alert;
        }
    }

    public function getAllLinhvuc($page = 1, $total = 5)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query = "SELECT * FROM tbllinhvuc limit $tmp,$total";
        $result = $this->db->select($query);
        return $result;
    }

    public function getAll()
    {
        $query = "SELECT * FROM tbllinhvuc";
        $result_mysqli = $this->db->select($query);
        if ($result_mysqli) {
            $result = mysqli_fetch_all($result_mysqli, MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }

    public function phantrang($row = 5)
    {
        $query = "SELECT COUNT(*) FROM tbllinhvuc";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }

    public function update($data)
    {
        $query = "UPDATE tbllinhvuc SET tenLinhVuc = '".$data['tenLinhVuc']."' WHERE maLinhVuc = '".$data['maLinhVuc']."'";
        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'>Cập nhật danh mục thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Cập nhật danh mục thất bại</span>";
            return $alert;
        }
    }

    public function getByIdAdmin($maLinhVuc)
    {
        $query = "SELECT * FROM tbllinhvuc where maLinhVuc = '$maLinhVuc'";
        $result = $this->db->select($query);
        return $result;
    }

    public function getById($id)
    {
        $query = "SELECT * FROM categories where id = '$id' AND status = 1";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
            return $result;
        }
        return false;
    }

    public function block($id)
    {
        $query = "UPDATE categories SET status = 0 where id = '$id' ";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function active($id)
    {
        $query = "UPDATE categories SET status = 1 where id = '$id' ";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>