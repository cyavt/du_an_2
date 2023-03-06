<div id="myModal" class="modal animate__backInDown">
    <!-- Nội dung form đăng nhập -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <!-- Form -->
        <h3>Đăng ký thành viên Lab</h3>
        <form method="GET" action="" id="Add">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="name" id="" placeholder="Họ và tên" required/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="email" name="email" id="" placeholder="Email" required/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="phone" id="" placeholder="SĐT" required/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="msv" id="" placeholder="Mã sinh viên" required/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="khoa" id="" placeholder="Khoa" required/>
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="lopsh" id="" placeholder="Lớp SH" required/>
                </div>
                <!-- Break -->
                <div class="col-12">
                    <select name="vitri" id="demo-category">
                        <option value="0">- Vị trí ứng tuyển -</option>
                        <option value="Lập trình nhúng">Lập trình nhúng</option>
                        <option value="Lập trình Web">Lập trình Web/App</option>
                        <option value="Điện tử">Điện tử</option>
                        <option value="Cơ khí">Cơ khí</option>
                        <option value="Ban điều hành nghiên cứu">Ban điều hành nghiên cứu (ưu tiên nữ)</option>
                        <option value="Khác">Khác</option>
                    </select>
                </div>
                <!-- Break -->
                <div class="col-12">
                    <textarea name="message" id="message" placeholder="Tham gia Lab vì điều gì ? Những kiến thức bạn đang có ?" rows="4" required></textarea>
                </div>
                <!-- Break -->
                <div class="col-6 col-12">
                    <h4>Làm bài kiểm tra năng lực ?</h4>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="yes1" name="ktra" value="x" checked>
                    <label for="yes1">Có</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="no1" name="ktra" value="0">
                    <label for="no1">Không</label>
                </div>
                <div class="col-6 col-12">
                    <h4>Hoạt động tích cực, tuân thủ nội quy ?</h4>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="yes2" name="noiquy" value="x" checked>
                    <label for="yes2">Có</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="no2" name="noiquy" value="0">
                    <label for="no2">Không</label>
                </div>
                <div class="col-6 col-12">
                    <h4>Tham gia hoạt động nghiên cứu khoa học ?</h4>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="yes3" name="nckh" value="x" checked>
                    <label for="yes3">Có</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="no3" name="nckh" value="x">
                    <label for="no3">Không</label>
                </div>
                <!-- Break -->
                <div class="col-6 col-12-small">
                    <input type="checkbox" id="demo-copy" name="dieukien" value="yes" required>
                    <label for="demo-copy">Vui lòng đầy đủ "<a href="./thongtin">Thông tin</a>" trước khi chọn.</label>
                </div>
                <!-- Break -->
                <div class="col-12">
                    <ul class="actions">
                        <li><button value="submit" name="submit" type="submit" id="sbtn" class="button primary">Gửi</button></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </div>
            </div>
        </form>

    </div>
</div>