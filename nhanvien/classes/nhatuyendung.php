<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../lib/session.php');
?>

<?php
/**
 * 
 */
class nhatuyendung
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert($data)
    {
        $email = $data['email'];
        $matKhau = $data['matKhau'];
        $tenNguoiLienHe = $data['tenNguoiLienHe'];
        $soDienThoai = $data['soDienThoai'];
        $tenCongTy = $data['tenCongTy'];
        $maSoThue = $data['maSoThue'];
        $diaChi = $data['diaChi'];
        $maLinhVuc = $data['maLinhVuc'];
        $maPX = $data['maPX'];

        $query = "INSERT INTO tblnhatuyendung VALUES (NULL,'$email','$matKhau','$tenNguoiLienHe','$soDienThoai','$tenCongTy','$maSoThue','$diaChi','$maLinhVuc','$maPX',2) ";
        $result = $this->db->insert($query);
        if ($result) {
            $alert = "<span class='success'>Nhà tuyển dụng đã được thêm thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Thêm Nhà tuyển dụng thất bại</span>";
            return $alert;
        }
    }

    public function getAllAdmin($page = 1, $total = 5)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query =
            "SELECT tblnhatuyendung.*, tbllinhvuc.tenLinhVuc as tenLV
			 FROM tblnhatuyendung INNER JOIN tbllinhvuc ON tblnhatuyendung.maLinhVuc = tbllinhvuc.maLinhVuc
             limit $tmp,$total";
        $result = $this->db->select($query);
        return $result;
    }

    public function getAll()
    {
        $query = "SELECT * FROM tblnhatuyendung ";
        $result_mysqli = $this->db->select($query);
        if ($result_mysqli) {
            $result = mysqli_fetch_all($result_mysqli, MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }

    public function getnhatuyendung()
    {
        $query = "SELECT * FROM tblnhatuyendung";
        $result_mysqli = $this->db->select($query);
        if ($result_mysqli) {
            $result = mysqli_fetch_all($result_mysqli, MYSQLI_ASSOC);
            return $result;
        }
        return false;
    }

    public function phantrang($row = 5)
    {
        $query = "SELECT COUNT(*) FROM tblnhatuyendung";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }

    public function getCountPagingClient($cateId, $row = 5)
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

    public function getProductsByCateId($page = 1, $cateId, $total = 5)
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

    public function update($data)
    {
        $email = $data['email'];
        $matKhau = $data['matKhau'];
        $tenNguoiLienHe = $data['tenNguoiLienHe'];
        $soDienThoai = $data['soDienThoai'];
        $tenCongTy = $data['tenCongTy'];
        $maSoThue = $data['maSoThue'];
        $diaChi = $data['diaChi'];
        $maLinhVuc = $data['maLinhVuc'];
        $maPX = $data['maPX'];

            $query = "UPDATE tblnhatuyendung SET 
					email ='$email',
					matKhau = '$matKhau',
					tenNguoiLienHe = '$tenNguoiLienHe',
					soDienThoai = '$soDienThoai',
					tenCongTy = '$tenCongTy',
					maSoThue = '$maSoThue'
                    diaChi = '$diaChi',
                    maLinhVuc = '$maLinhVuc',
                    maPX = '$maPX'
                    WHERE maNhaTuyenDung = '" . $data['maNhaTuyenDung'] ."'";
        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'>Cập nhật nhà tuyển dụng thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Cập nhật nhà tuyển dụng thất bại</span>";
            return $alert;
        }
    }

    public function getProductbyIdAdmin($maNhaTuyenDung)
    {
        $query = "SELECT * FROM tblnhatuyendung where maNhaTuyenDung = '$maNhaTuyenDung'";
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

    public function block($id)
    {
        $query = "UPDATE products SET status = 0 where id = '$id' ";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function active($id)
    {
        $query = "UPDATE products SET status = 1 where id = '$id' ";
        $result = $this->db->delete($query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateQty($id, $qty)
    {
        $query = "UPDATE products SET qty = qty - $qty, soldCount = soldCount + $qty WHERE id = $id";
        $mysqli_result = $this->db->update($query);
        if ($mysqli_result) {
            return true;
        }
        return false;
    }
}
?>