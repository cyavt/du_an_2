$("#login").on("submit", function (e) {
  e.preventDefault();
  const FormLogin = new FormData(this);
  const user = FormLogin.get("username").trim();
  const pass = FormLogin.get("password").trim();

  //Kiểm tra tính xác thực
  if (user === "" || pass === "") {
    swal("Lỗi đăng nhập!", "Vui lòng điền đủ thông tin !", "error");
  } else {
    $.ajax({
      url: "send/login",
      type: "POST",
      data: FormLogin,
      contentType: false,
      cache: true,
      processData: false,
      beforeSend: function () {
        $("#btnLogin").text("Đang xử lý...").prop("disabled", true);
      },
      success: function (data) {
        $("#btnLogin").text("Đăng nhập").prop("disabled", false);
        console.log(data);
        if (data == true)
          swal("Thành công !", "Đăng nhập thành công", "success").then(
            function () {
              //loading();
              setTimeout(function () {
                location.reload();
              }, 1000);
            }
          );
        else if (data == false)
          swal(
            "Lỗi đăng nhập!",
            "Tài khoản hoặc mật khẩu không đúng!",
            "error"
          );
        else swal("Lỗi đăng nhập!", "Máy chủ không phản hồi dữ liệu!", "error");
      },
      error: function () {
        swal(
          "Đã xảy ra lỗi!",
          "Đã xảy ra lỗi cục bộ, vui lòng thử lại!",
          "error"
        );
        $("#btnLogin").text("Đăng nhập").prop("disabled", false);
      },
    });
  }
});
