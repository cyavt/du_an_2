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
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="header-title mb-0">Quản lý</h5>
                    </div>
                    <div id="cardCollpase1" class="collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Tên</th>
                                                    <th>Vị trí</th>
                                                    <th>Nhịp tim</th>
                                                    <th>Dung lượng pin</th>
                                                    <th>Xem chi tiết</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $result = mysqli_query($connect, "SELECT * FROM `lifebuoy_in`");
                                                foreach ($result as $row) :
                                                ?>
                                                    <tr>
                                                        <td><?= $row['token']; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><a href="https://www.google.com/maps/place/<?= $row['location']; ?>" style="color:red;" target="_blank"><?= $row['location']; ?></a></td>
                                                        <td><?= $row['heart_rate']; ?></td>
                                                        <td><?= $row['bat_cap']; ?></td>
                                                        <td><?= $row['water_state']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end card-->

            </div>
            <!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="header-title mb-0"> Dự báo thời tiết</h5>
                    </div>
                    <div id="cardCollpase2" class="collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="morris-line-example" class="morris-charts" dir="ltr" style="height: 200px;"></div>
                                    <div class="row text-center mt-4">
                                        <div class="col-sm-4">
                                            <h5> 29℃</h5>
                                            <small class="text-muted"> Nhiệt độ</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5> 75%</h5>
                                            <small class="text-muted">Độ ẩm</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5> 25%</h5>
                                            <small class="text-muted">Khả năng mưa</small>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end card-->

            </div>
        </div>
        <!-- End row -->

        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card bg-pink">
                    <div class="card-body widget-style-2">
                        <div class="text-white media">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span data-plugin="counterup">50</span></h2>
                                <p class="mb-0"> Số lượng phao hiện có</p>
                            </div>
                            <i class="ion-md-eye"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card bg-purple">
                    <div class="card-body widget-style-2">
                        <div class="text-white media">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span data-plugin="counterup">20</span></h2>
                                <p class="mb-0"> Số phao đang hoạt động</p>
                            </div>
                            <i class="ion-md-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card bg-info">
                    <div class="card-body widget-style-2">
                        <div class="text-white media">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span data-plugin="counterup">2</span></h2>
                                <p class="mb-0"> Trạng thái cảnh báo</p>
                            </div>
                            <i class="ion-ios-pricetag"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card bg-primary">
                    <div class="card-body widget-style-2">
                        <div class="text-white media">
                            <div class="media-body align-self-center">
                                <h2 class="my-0 text-white"><span data-plugin="counterup">5</span></h2>
                                <p class="mb-0">Dung lượng pin thấp</p>
                            </div>
                            <i class="mdi mdi-comment-multiple"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->

    </div>
    <!-- end container-fluid -->

</div>