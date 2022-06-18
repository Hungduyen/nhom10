<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../lib/session.php');
?>

<?php
/**
 * 
 */
class congty
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert($data)
    {
        $noiDungGioiThieu = $data['noiDungGioiThieu'];
        $maNhaTuyenDung = $data['maNhaTuyenDung'];

        // Check image and move to upload folder
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/" . $unique_image;

        move_uploaded_file($file_temp, $uploaded_image);

        $query = "INSERT INTO tblthongtincongty VALUES (NULL,'$unique_image','$noiDungGioiThieu','$maNhaTuyenDung') ";
        $result = $this->db->insert($query);
        if ($result) {
            $alert = "<span class='success'>Thông tin công ty đã được thêm thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Thêm thông tin công ty thất bại</span>";
            return $alert;
        }
    }

    public function getAllAdmin($page = 1, $total = 3)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query =
            "SELECT tblthongtincongty.*, tblnhatuyendung.tenCongTy as tenCT
             FROM tblthongtincongty INNER JOIN tblnhatuyendung ON tblthongtincongty.maNhaTuyenDung = tblnhatuyendung.maNhaTuyenDung
             limit $tmp,$total";
        $result = $this->db->select($query);
        return $result;
    }

    public function getAll()
    {
        $query =
            "SELECT products.*, categories.name as cateName
             FROM products INNER JOIN categories ON products.cateId = categories.id INNER JOIN users ON products.createdBy = users.id
             WHERE products.status = 1
             order by products.id desc ";
        $result = $this->db->select($query);
        return $result;
    }

    public function phantrang($row = 3)
    {
        $query = "SELECT COUNT(*) FROM tblthongtincongty";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }

    public function getCountPagingClient($cateId, $row = 3)
    {
        $query = "SELECT COUNT(*) FROM products WHERE cateId = $cateId";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }

    public function getFeaturedProducts()
    {
        $query =
            "SELECT *
             FROM products
             WHERE products.status = 1
             order by products.soldCount DESC
             LIMIT 8";
        $result = $this->db->select($query);
        return $result;
    }

    public function getProductsByCateId($page = 1, $cateId, $total = 3)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query =
            "SELECT *
             FROM products
             WHERE status = 1 AND cateId = $cateId
             LIMIT $tmp,$total";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }

    public function update($data, $files)
    {
        $noiDungGioiThieu = $data['noiDungGioiThieu'];
        $maNhaTuyenDung = $data['maNhaTuyenDung'];

        $file_name = $_FILES['logo']['name'];
        $file_temp = $_FILES['logo']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "uploads/" . $unique_image;

        //If user has chooose new image
        if (!empty($file_name)) {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "UPDATE tblthongtincongty SET 
                    noiDungGioiThieu ='$noiDungGioiThieu',
                    maNhaTuyenDung = '$maNhaTuyenDung',
                    image = '$unique_image'
                     WHERE maCongTy = " . $data['maCongTy'] . " ";
        } else {
            $query = "UPDATE tblthongtincongty SET 
                    noiDungGioiThieu ='$noiDungGioiThieu',
                    maNhaTuyenDung = '$maNhaTuyenDung',
                     WHERE maCongTy = " . $data['maCongTy'] . " ";
        }
        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'>Cập nhật công ty thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Cập nhật công ty thất bại</span>";
            return $alert;
        }
    }

    public function getProductbyIdAdmin($maCongTy)
    {
        $query = "SELECT * FROM tblthongtincongty where maCongTy = '$maCongTy'";
        $result = $this->db->select($query);
        return $result;
    }

    public function getProductbyId($id)
    {
        $query = "SELECT * FROM products where id = '$id' AND status = 1";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $result = mysqli_fetch_all($this->db->select($query), MYSQLI_ASSOC)[0];
            return $result;
        }
        return false;
    }
}
?>