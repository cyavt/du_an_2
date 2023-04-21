<?php
include("./meta.php");
include("./header.php");
?>



<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title"><?=$h4;?></h4>
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>@mdo</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>@mdo</td>
                                                    <td>@mdo</td>
                                                </tr>
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
                                            <h5>$ 86,956</h5>
                                            <small class="text-muted"> This Year's Report</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>$ 86,69</h5>
                                            <small class="text-muted">Weekly Sales Report</small>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>$ 948,16</h5>
                                            <small class="text-muted">Yearly Sales Report</small>
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

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
<?php
include("./footer.php");
?>