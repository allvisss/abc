<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CUsers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        $this->load->model('M_login');
        $this->load->model('M_Users');
        if ($this->session->userdata('id') == null) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['dashboard'] = true;
        $this->load->view('template/template', $data);
    }

    public function dashboarddata()
    {
        $data['user'] = $this->M_login->getdashboarddata($this->session->userdata('id'));
        $data['dashboard'] = true;
        $this->load->view('template/template', $data);
    }

    public function editmore()
    {
        $data['user'] = $this->M_Users->getnvdata($this->session->userdata('id'));
        $data['dashboard_edit'] = true;
        $this->load->view('template/template', $data);
    }

    public function saveupdate()
    {
        $TenNV = $_POST['tennv'];
        $GioiTinh = $_POST['gioitinh'];
        $ChucVu = $_POST['chucvu'];
        $MaPhong = $_POST['maphong'];
        $cmnd = $_POST['cmnd'];
        $NgaySinh = $_POST['ngaysinh'];
        $NoiSinh = $_POST['noisinh'];
        $NguyenQuan = $_POST['nguyenquan'];
        $HKThuongTru = $_POST['hokhauthuongtru'];
        $HKTamTru = $_POST['hokhautamtru'];
        $sdt = $_POST['sdt'];
        $ngayvaocongty = $_POST['ngayvaocongty'];
        $tongiao = $_POST['tongiao'];
        $quoctich = $_POST['quoctich'];
        $trinhdongoaingu = $_POST['trinhdongoaingu'];
        $hocvan = $_POST['hocvan'];
        if (
            $this->M_Users->saveupdate_ttnv($this->session->userdata('id'), $NoiSinh, $NguyenQuan, $HKThuongTru, $HKTamTru, $sdt, $ngayvaocongty, $tongiao, $quoctich, $trinhdongoaingu, $hocvan)
            && $this->M_Users->saveupdate_nv($this->session->userdata('id'), $TenNV, $GioiTinh, $ChucVu, $MaPhong, $cmnd, $NgaySinh)
        ) {
            $data['message'] = 'Updated successfully';
            $data['user'] = $this->M_Users->getnvdata($this->session->userdata('id'));
            $data['dashboard_edit'] = true;
            $this->load->view('template/template', $data);
        } else {
            $data['message'] = 'Update failed';
            $data['user'] = $this->M_Users->getnvdata($this->session->userdata('id'));
            $data['dashboard_edit'] = true;
            $this->load->view('template/template', $data);
        };
    }

    public function get_json_users()
    {
        // $json_data = array();
        // $role = $this->session->userdata('role');
        // if ($role == 1) {
        //     $result = $this->MUsers->getAllInformation_Admin();
        // } else {
        //     $MaNV = $this->session->userdata('MaNV');
        //     $user = $this->MUsers->getInformation($MaNV);
        //     $result = $this->MUsers->getAllInformation_Leader($user->MaPhong);
        // }
        // foreach ($result as $rec) //foreach loop  
        // {
        //     $json_array['MaNV'] = $rec->MaNV;
        //     $json_array['TenNV'] = $rec->TenNV;
        //     $json_array['GioiTinh'] = $rec->GioiTinh;
        //     $json_array['ChucVu'] = $rec->ChucVu;
        //     $json_array['MaPhong'] = $rec->MaPhong;
        //     $json_array['CMND'] = $rec->CMND;
        //     $json_array['NgaySinh'] = $rec->NgaySinh;
        //     array_push($json_data, $json_array);
        // }
        // $data = (object)[
        //     'data' => $json_data
        // ];
        // echo json_encode($data);
        $json_users = json_encode($this->M_Users->getusers());
        echo $json_users;
    }

    public function getPB()
    {
        $listPB = $this->M_Users->loadPhongBan();
        var_dump($listPB[0]);
    }

    public function test()
    {
        $this->load->view('template/testtemp');
    }

    public function logout()
    {
        session_destroy();
        // $data['message'] = 'Logged out!';
        // $this->load->view('login', $data);
        redirect('login');
    }
}
