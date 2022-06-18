<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../lib/session.php');
?>

<?php
/**
 * 
 */
class ungvien
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert($data)
    {
        $TenUV = $data['TenUV'];
        $SDT = $data['SDT'];
        $DiaChi = $data['DiaChi'];
        $maPX = $data['maPX'];
        $ViTri = $data['ViTri'];
        $Trinhdo = $data['Trinhdo'];
        $KinhNghiem = $data['KinhNghiem'];
        $LinhVuc = $data['LinhVuc'];
        $MucLuong = $data['MucLuong'];
        $NoiLamViec = $data['NoiLamViec'];
        $HinhThuc = $data['HinhThuc'];
        $MucTieu = $data['MucTieu'];
        $kynang = $data['kynang'];
        $NgaySinh = $data['NgaySinh'];

       
        $query = "INSERT INTO tblthongtinungvien VALUES (NULL,'$TenUV','$NgaySinh','$SDT','$DiaChi','$maPX','$ViTri','$Trinhdo','$KinhNghiem','$LinhVuc','$MucLuong','$NoiLamViec','$HinhThuc','$MucTieu','$kynang','2','0000-00-00')";

    

        $result = $this->db->insert($query);
        if ($result) {
            $alert = "<span class='success'>Ứng viên đã được thêm thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Thêm Ứng viên thất bại</span>";
            return $alert;
        }
    }

    //Danh sách ứng viên
    public function dsUngVien($page = 1, $total = 5)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query =
            "SELECT products.*, categories.name as cateName, users.fullName
             FROM products INNER JOIN categories ON products.cateId = categories.id INNER JOIN users ON products.createdBy = users.id
             order by products.id desc 
             limit $tmp,$total";
        $result = $this->db->select($query);
        return $result;
    }

    public function hi($page = 1, $total = 5)
    {
        if ($page <= 0) {
            $page = 1;
        }
        $tmp = ($page - 1) * $total;
        $query =
            "SELECT tblthongtinungvien.*, tbllinhvuc.tenLinhVuc as tenLV, tblkynang.tenKN as tenKN
             FROM tblthongtinungvien INNER JOIN tbllinhvuc ON tblthongtinungvien.LinhVuc = tbllinhvuc.maLinhVuc INNER JOIN tblkynang ON tblthongtinungvien.kynang = tblkynang.maKN 
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

    public function phantrang($row = 5)
    {
        $query = "SELECT COUNT(*) FROM tblthongtinungvien";
        $mysqli_result = $this->db->select($query);
        if ($mysqli_result) {
            $totalrow = intval((mysqli_fetch_all($mysqli_result, MYSQLI_ASSOC)[0])['COUNT(*)']);
            $result = ceil($totalrow / $row);
            return $result;
        }
        return false;
    }

    public function getCountPagingClient($cateId, $row = 8)
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






    public function update($data, $files)
    {
        $TenUV = $data['TenUV'];
        $SDT = $data['SDT'];
        $DiaChi = $data['DiaChi'];
        $maPX = $data['maPX'];
        $ViTri = $data['ViTri'];
        $Trinhdo = $data['Trinhdo'];
        $KinhNghiem = $data['KinhNghiem'];
        $LinhVuc = $data['LinhVuc'];
        $MucLuong = $data['MucLuong'];
        $Noilamviec = $data['Noilamviec'];
        $HinhThuc = $data['HinhThuc'];
        $MucTieu = $data['MucTieu'];
        $kynang = $data['kynang'];
        $NgaySinh = $data['NgaySinh'];

        $query = "UPDATE tblthongtinungvien SET 
                TenUV ='$TenUV',
                SDT = '$SDT',
                DiaChi = '$DiaChi',
                maPX = '$maPX',
                ViTri = '$ViTri',
                Trinhdo = '$Trinhdo'
                KinhNghiem = '$KinhNghiem',
                LinhVuc = '$LinhVuc'
                ViTri = '$ViTri',
                MucLuong = '$MucLuong'
                Noilamviec = '$Noilamviec',
                HinhThuc = '$HinhThuc'
                MucTieu = '$MucTieu',
                kynang = '$kynang',
                NgaySinh = '$NgaySinh'
                WHERE IDHS = " . $data['IDHS'] . " ";


        $result = $this->db->update($query);
        if ($result) {
            $alert = "<span class='success'>Cập nhật ứng viên thành công</span>";
            return $alert;
        } else {
            $alert = "<span class='error'>Cập nhật ứng viên thất bại</span>";
            return $alert;
        }
    }












    public function getProductbyIdAdmin($IDHS)
    {
        $query = "SELECT * FROM tblthongtinungvien where IDHS = '$IDHS'";
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