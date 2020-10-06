<div class="row">
    <div class="col-lg-4 offset-lg-4">
        <div class="card mt-5">
            <div class="card-header bg-primary text-white text-center">
                <span class="login100-form-title p-b-26">
                    <h3>Dashboard</h3>
                </span>
            </div>
            <div class="card-body">
                <form method="POST" class="login100-form validate-form" action="/index.php/CUsers/logout">
                    <div class="wrap-input100 validate-input">
                        <div class="position-relative form-group"><label>Mã nhân viên: </label><input disabled name="manv" type="text" class="form-control" value="<?php echo $user->MaNV ?>"></div>
                        <div class="position-relative form-group"><label>Tên nhân viên: </label><input disabled name="tennv" type="text" class="form-control" value="<?php echo $user->TenNV ?>"></div>
                        <div class="position-relative form-group"><label>Giới tính: </label><input disabled name="gioitinh" type="text" class="form-control" value="<?php echo $user->GioiTinh ?>"></div>
                        <div class="position-relative form-group"><label>Chức vụ: </label><input disabled name="chucvu" type="text" class="form-control" value="<?php echo $user->ChucVu ?>"></div>
                        <div class="position-relative form-group"><label>Mã phòng: </label><input disabled name="maphong" type="text" class="form-control" value="<?php echo $user->MaPhong ?>"></div>
                        <div class="position-relative form-group"><label>Số CMND: </label><input disabled name="cmnd" type="text" class="form-control" value="<?php echo $user->CMND ?>"></div>
                        <div class="position-relative form-group"><label>Ngày sinh: </label><input disabled name="ngaysinh" type="date" class="form-control" value="<?php echo $user->NgaySinh ?>"></div>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="mb-2 btn-block btn-transition btn btn-outline-primary">
                                Logout
                            </button>
                        </div>
                        <?php if (isset($message)) {
                            echo "<p>$message</p>";
                        } ?>
                    </div>

                </form>
                <form method="POST" class="login100-form validate-form" action="/index.php/CUsers/editmore">
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="mb-2 btn-block btn-transition btn btn-outline-primary">
                                Show more
                            </button>
                        </div>
                        <?php if (isset($message)) {
                            echo "<p>$message</p>";
                        } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>