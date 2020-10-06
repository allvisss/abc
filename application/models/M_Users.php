<?php

class M_Users extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getnvdata($id)
    {
        // $this->db->select(`nhanvien.MaNV`, `TenNV`, `GioiTinh`, `ChucVu`, `MaPhong`, `CMND`, `NgaySinh`, `NoiSinh`, `NguyenQuan`, `HKThuongTru`, `HKTamTru`, `SDT`, `NgayVaoCongTy`, `TonGiao`, `QuocTich`, `TrinhDoNgoaiNgu`, `HocVan`);
        // $this->db->from(`nhanvien`,  `ttnhanvien`);
        // $this->db->where(`nhanvien.MaNV = ttnhanvien.MaNV`);
        // $this->db->where(`nhanvien.MaNV`, $id);
        //$this->db->query("SELECT nhanvien.MaNV, nhanvien.TenNV, nhanvien.GioiTinh, nhanvien.ChucVu, nhanvien.MaPhong, nhanvien.CMND, nhanvien.NgaySinh, ttnhanvien.NoiSinh, ttnhanvien.NguyenQuan, ttnhanvien.HKThuongTru, ttnhanvien.HKTamTru, ttnhanvien.SDT, ttnhanvien.NgayVaoCongTy, ttnhanvien.TonGiao, ttnhanvien.QuocTich, ttnhanvien.TrinhDoNgoaiNgu, ttnhanvien.HocVan FROM nhanvien, ttnhanvien WHERE nhanvien.MaNV = ttnhanvien.MaNV");
        $this->db->select("ttnhanvien.*, nhanvien.TenNV, nhanvien.GioiTinh, nhanvien.ChucVu,nhanvien.MaPhong, nhanvien.CMND,nhanvien.NgaySinh");
        $this->db->from("nhanvien, ttnhanvien");
        $this->db->where("ttnhanvien.MaNV=nhanvien.MaNV");
        $this->db->where('nhanvien.MaNV', $id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function getusers()
    {
        $this->db->select("ttnhanvien.*, nhanvien.TenNV, nhanvien.GioiTinh, nhanvien.ChucVu,nhanvien.MaPhong, nhanvien.CMND,nhanvien.NgaySinh");
        $this->db->from("nhanvien, ttnhanvien");
        $this->db->where("ttnhanvien.MaNV=nhanvien.MaNV");
        return $this->db->get()->result();
    }

    public function saveupdate_nv($id, $ten, $gioitinh, $chucvu, $maphong, $CMND, $ngaysinh)
    {
        $this->db->set("TenNV", $ten);
        $this->db->set("GioiTinh", $gioitinh);
        $this->db->set("ChucVu", $chucvu);
        $this->db->set("MaPhong", $maphong);
        $this->db->set("CMND", $CMND);
        $this->db->set("NgaySinh", $ngaysinh);
        $this->db->where('nhanvien.MaNV', $id);
        return $this->db->update("nhanvien");
    }

    public function saveupdate_ttnv($id, $NoiSinh, $NguyenQuan, $ThuongTru, $TamTru, $SDT, $NgayVao, $TonGiao, $QuocTich, $NgoaiNgu, $HocVan)
    {
        $this->db->set("NoiSinh", $NoiSinh);
        $this->db->set("NguyenQuan", $NguyenQuan);
        $this->db->set("HKThuongTru", $ThuongTru);
        $this->db->set("HKTamTru", $TamTru);
        $this->db->set("SDT", $SDT);
        $this->db->set("NgayVaoCongTy", $NgayVao);
        $this->db->set("TonGiao", $TonGiao);
        $this->db->set("QuocTich", $QuocTich);
        $this->db->set("TrinhDoNgoaiNgu", $NgoaiNgu);
        $this->db->set("HocVan", $HocVan);
        $this->db->where('ttnhanvien.MaNV', $id);
        return $this->db->update("ttnhanvien");
    }

    public function loadPhongBan()
    {
        $this->db->select('MaPhong');
        $this->db->from('PhongBan');
        return $this->db->get()->result();
    }
}
