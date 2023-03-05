<!-- Sidebar -->
<div id="sidebar">

    <div class="inner">

        <section>
            <span class="image fit"><img src="./images/ILab.png" alt=""></span>
        </section>
        <!-- Menu -->
        <nav id="menu">
            <header class="major center">
                <h2>Trang chủ</h2>
            </header>
            <ul>
                <li><a href="./home">Trang chủ</a></li>
                <li><a href="thongtin">Giới thiệu</a></li>
                <li><a href="./error">Bài viết</a></li>
                <li>
                    <span class="opener">Nhóm</span>
                    <ul>
                        <li><a href="#" class="dev">Công nghệ thông tin</a></li>
                        <li><a href="#" class="dev">Điện-Điện tử</a></li>
                        <li><a href="#" class="dev">Cơ khí</a></li>
                        <li><a href="#" class="dev">Smart Home</a></li>
                    </ul>
                </li>
                <li><a href="#" class="dev">Tài liệu</a></li>
                <li><a href="#" class="dev">Phần mềm</a></li>
                <li><a href="#" class="dev">Thông tin hoạt động</a></li>
                <li><a href="#" class="dev">Project</a></li>
                <li><a href="./error">Phản hồi</a></li>
            </ul>
        </nav>

        <!-- Section -->
        <section>
            <header class="major center">
                <h2>Điều hành</h2>
            </header>
            <div class="mini-posts">
                <center>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                    <strong>Giáo viên hướng dẫn</strong>
                    <p>TS.Trần Hoàng Vũ</p>
                </center>
                <center>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                    <strong>Cố vấn</strong>
                    <p>Phan Tuấn Nhật</p>
                </center>
                <center>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                    <strong>Cố vấn</strong>
                    <p>Trần Viết Minh Phát</p>
                </center>
                <!-- 						<center>
                <a href="./dev404/" class="image fit" style="width: 70%;"><img src="images/pic07.png" alt="" /></a>
                <strong>Nhóm trưởng</strong>
                <p>Nguyễn Văn Trúc</p>
            </center> -->
                <center>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                    <strong>Nhóm trưởng</strong>
                    <p>Nguyễn Văn Trúc</p>
                </center>
            </div>
            <div class="actions center">
                <a href="./error" class="button">xem thêm</a>
            </div>
        </section>

        <!-- Section -->
        <section>
            <header class="major center">
                <h2>Thông tin liên hệ</h2>
            </header>
            <p>Mọi thông tin chi tiết vui lòng liên hệ cho chúng tôi. IoT Innovation Lab</p>
            <p><a href="https://ute.udn.vn/" target="_blank">Trường Đại học Sư phạm Kỹ thuật - Đại học Đà Nẵng</a></p>
            <ul class="contact">
                <li class="icon solid fa-envelope"><a href="#">information@gmail.com</a></li>
                <li class="icon solid fa-phone">(000) 000-0000</li>
                <li class="icon solid fa-home">02 Thanh Sơn<br />
                    Hải Châu, TP. Đà nẵng</li>
            </ul>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; IoT Innovation Lab<a href="/"> LAB</a>. Design: CYA</a>.</p>
        </footer>
    </div>
</div>

</div>

<!-- Scripts -->
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script>
    const home = document.getElementById('detail');

    const modal = document.getElementById('myModal');
    const btn = document.getElementById("myBtn");
    const span = document.getElementsByClassName("close")[0];
    const dev = document.querySelectorAll('.dev');

    btn.addEventListener('click', function() {
        modal.style.display = "block";
    })
    span.addEventListener('click', function() {
        modal.style.display = "none";
    })
    window.addEventListener('click', function() {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    })

    for (let i = 0; i < dev.length; i++) {
        dev[i].addEventListener('click', function() {
            swal(
                'Sorry :(',
                'Chỉ có thành viên mới sử dụng được tính năng này !',
                'info'
            )
        });
    }
    /* slide */
    if (home != undefined) {
        var slideIndex = 1;
        showDivs(slideIndex);
        carousel2();

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            const x = document.getElementsByClassName("mySlides3");
            const dots = document.getElementsByClassName("image-badge");
            let i;
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" badge-white", " ");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " badge-white";
            
        }

        function carousel2() {
            let i;
            const x = document.getElementsByClassName("mySlides3");
            const dots = document.getElementsByClassName("image-badge");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" badge-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " badge-white";
            setTimeout(carousel2, 2000);
            slideIndex++;
        }
    }
    /* <!-- POST data --> */
    $("#Add").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
            url: "https://script.google.com/macros/s/AKfycbytqfYjsfngfUjdFmwMbgBW2hl80K3lKfG3Lu5pWSu4jjtk0sQXfWvqok9c4TilN0D2/exec",
            type: "GET",
            data: $("#Add").serialize(),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $("#sbtn").text('Đang xử lý...').prop('disabled', true)
            },
            success: function(data) {
                console.log(data)
                $("#sbtn").text('Gửi').prop('disabled', false)
                if (data['result'] == 'success')
                    swal("Thành công !", "Thêm thành công", "success").then(function() {
                        location.reload();
                    })
                else if (data == 'null')
                    swal("Lỗi !", "Vui lòng điền đủ thông tin!", "error")
                else
                    swal("Lỗi !", "Vui lòng thử lại !", "error")
            },
            error: function() {
                swal("Đã xảy ra lỗi!", "Đã xảy ra lỗi cục bộ, vui lòng thử lại!", "error")
                $("#sbtn").text('Gửi').prop('disabled', false)
            }
        });
    }))
</script>
</body>

</html>