<?php
$token = test_input($_GET['id']);
$result = mysqli_query($connect, "SELECT * FROM `lifebuoy_in` WHERE `token` = '{$token}'");
$row = mysqli_fetch_assoc($result);
if (!isset($row)) {
    die(HACKER);
    exit();
}
//var_dump($row);
?>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title"><?= $h4; ?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Tổng quan</a></li>
                            <li class="breadcrumb-item active">Thống kê</li>
                        </ol>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Thông tin</h4>

                        <form class="parsley-examples" action="#">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" id="d-id" value="<?= $row['id'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Token</span></label>
                                <input type="text" class="form-control" id="d-token" value="<?= $row['token'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tên phao</span></label>
                                <input type="text" class="form-control" id="d-name" value="<?= $row['name'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</span></label>
                                <input type="text" class="form-control" id="d-location" value="<?= $row['location'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nhịp tim</span></label>
                                <input type="text" class="form-control" id="d-heart-beat" value="<?= $row['heart_rate'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Dung lượng pin</span></label>
                                <input type="text" class="form-control" id="d-bat-cap" value="<?= $row['bat_cap'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tình trạng phao</span></label>
                                <input type="text" class="form-control" id="d-state" value="<?= $row['water_state'] ?>" readonly>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Lịch sử hoạt động</h4>
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Location</th>
                                        <th>Heartbeat</th>
                                        <th>State</th>
                                        <th>Battery capacity %</th>
                                        <th>Time log</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $log_result = mysqli_query($connect, "SELECT * FROM `log_activities` WHERE `token` = '{$token}' ORDER BY CreateDT DESC");
                                    foreach ($log_result as $row_log) :
                                        $state = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `state` WHERE `id` = '{$row_log['water_state']}'"));
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $row_log['token']; ?></th>
                                            <td>
                                                <a href="https://www.google.com/maps/place/<?= $row_log['location']; ?>" style="color:red;" target="_blank"><?= $row['location']; ?></a>
                                            </td>
                                            <td><?= $row_log['heart_rate']; ?></td>
                                            <td>
                                                <span class="badge badge-<?= $state['color']; ?>"><?= $state['status']; ?></span>
                                            </td>
                                            <td><?= $row_log['bat_cap']; ?> %</td>
                                            <td><?= $row_log['CreateDT']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- end container-fluid -->

</div>
<!-- end content -->
