<div class="row">
    <div class="col-lg-4 offset-lg-4">
        <div class="card mt-5">
            <div class="card-header bg-primary text-white text-center">
                <span class="login100-form-title p-b-26">
                    <h3>Dashboard</h3>
                </span>
            </div>
            <div class="card-body">
                <form method="POST" class="login100-form validate-form" action="/index.php/CUsers/saveupdate">


                    <div class="wrap-input100 validate-input">
                        <div class="position-relative form-group"><label>Mã nhân viên: </label><input name="manv" type="text" class="form-control" value="<?php echo $user->MaNV ?>"></div>
                        <div class="position-relative form-group"><label>Tên nhân viên: </label><input name="tennv" type="text" class="form-control" value="<?php echo $user->TenNV ?>"></div>
                        <div class="position-relative form-group"><label>Giới tính: </label><select name="gioitinh" type="text" class="form-control" > <?php $selectedGender = $user->GioiTinh ?>
                                <option value="F" <?php if($selectedGender == 'F'){echo("selected");}?>>Female</option>
                                <option value="M" <?php if($selectedGender == 'M'){echo("selected");}?>>Male</option>
                            </select></div>
                        <div class="position-relative form-group"><label>Chức vụ: </label><input name="chucvu" type="text" class="form-control" value="<?php echo $user->ChucVu ?>"></div>
                        <div class="position-relative form-group"><label>Mã phòng: </label><select name="maphong" type="text" class="form-control" value="<?php echo $user->MaPhong ?>">
                                <option value="<?php echo $user->MaPhong ?>"><?php echo $user->MaPhong ?></option>
                            </select></div>
                        <div class="position-relative form-group"><label>Số CMND: </label><input name="cmnd" type="text" class="form-control" value="<?php echo $user->CMND ?>"></div>
                        <div class="position-relative form-group"><label>Ngày sinh: </label><input name="ngaysinh" type="date" class="form-control" value="<?php echo $user->NgaySinh ?>"></div>
                        <div class="position-relative form-group"><label>Nơi sinh: </label><input name="noisinh" type="text" class="form-control" value="<?php echo $user->NoiSinh ?>"></div>
                        <div class="position-relative form-group"><label>Nguyên quán: </label><input name="nguyenquan" type="text" class="form-control" value="<?php echo $user->NguyenQuan ?>"></div>
                        <div class="position-relative form-group"><label>Hộ khẩu thường trú: </label><input name="hokhauthuongtru" type="text" class="form-control" value="<?php echo $user->HKThuongTru ?>"></div>
                        <div class="position-relative form-group"><label>Hộ khẩu tạm trú: </label><input name="hokhautamtru" type="text" class="form-control" value="<?php echo $user->HKTamTru ?>"></div>
                        <div class="position-relative form-group"><label>Số điện thoại: </label><input name="sdt" type="text" class="form-control" value="<?php echo $user->SDT ?>"></div>
                        <div class="position-relative form-group"><label>Ngày vào công ty: </label><input name="ngayvaocongty" type="date" class="form-control" value="<?php echo $user->NgayVaoCongTy ?>"></div>
                        <div class="position-relative form-group"><label>Tôn giáo: </label><input name="tongiao" type="text" class="form-control" value="<?php echo $user->TonGiao ?>"></div>
                        <div class="position-relative form-group"><label>Quốc tịch: </label><input name="quoctich" type="text" class="form-control" value="<?php echo $user->QuocTich ?>"></div>
                        <div class="position-relative form-group"><label>Trình độ ngoại ngữ:: </label><input name="trinhdongoaingu" type="text" class="form-control" value="<?php echo $user->TrinhDoNgoaiNgu ?>"></div>
                        <div class="position-relative form-group"><label>Học vấn: </label><input name="hocvan" type="text" class="form-control" value="<?php echo $user->HocVan ?>"></div>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="mb-2 btn-block btn-transition btn btn-outline-primary">
                                Update
                            </button>
                        </div>
                        <?php if (isset($message)) {
                            echo " $message ";
                        } ?>
                    </div>

                </form>
                <form method="POST" class="login100-form validate-form" action="/index.php/CUsers/logout">

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <button class="mb-2 btn-block btn-transition btn btn-outline-primary">
                                Logout
                            </button>
                        </div>
                        <!-- <?php if (isset($message)) {
                                    echo " $message ";
                                } ?> -->
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<?php
    $this->load->view('usertable');
?>