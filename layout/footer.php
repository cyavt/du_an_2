    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2023 &copy; IoT Innovation LAB
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
    </div>

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>

    <script src="assets\libs\jquery-scrollto\jquery.scrollTo.min.js"></script>
    <script src="assets\libs\sweetalert2\sweetalert2.min.js"></script>

    <?php
    switch ($_GET["page"]) {
        case null:
    ?>
            <!-- Modals -->
            <script src="assets\libs\custombox\custombox.min.js"></script>
            <!-- Peity chart-->
            <script src="assets\libs\peity\jquery.peity.min.js"></script>
            <!-- Init js-->
            <script src="assets\js\pages\peity.init.js"></script>
            <!-- Peity chart-->
            <script src="assets\libs\peity\jquery.peity.min.js"></script>
            <!-- Init js-->
            <script src="assets\js\pages\peity.init.js"></script>
            <!-- Notice Warning -->
            <script src="app-js/noticeWarning.js"></script>
            <!-- Thống kê -->
            <script src="app-js/thongke.js"></script>
        <?php break;
        case "local":
        ?>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?= $config['KEYMAPAPI']; ?>&callback=initMap"></script>
            <script>
                var map

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        zoom: <?= $config['ZOOM']; ?>,
                        center: new google.maps.LatLng(<?= $config['TOADOTRUNGTAM']; ?>),
                        mapTypeId: 'roadmap'
                    });

                    var icons = {
                        status1: {
                            icon: '/assets/images/icon/life-jacket1.png'
                        },
                        status2: {
                            icon: '/assets/images/icon/life-jacket2.png'
                        },
                        status3: {
                            icon: '/assets/images/icon/life-jacket3.png'
                        },
                        status4: {
                            icon: '/assets/images/icon/life-jacket4.png'
                        }
                    };

                    $.ajax({
                        url: "send/getMaps",
                        dataType: "json",
                        success: function(data) {
                            //console.log(data)

                            function addMarker(feature) {
                                var marker = new google.maps.Marker({
                                    position: feature.position,
                                    icon: {
                                        url: icons[feature.type].icon,
                                        scaledSize: new google.maps.Size(40, 40)
                                    },
                                    map: map
                                });
                                marker['infowindow'] = new google.maps.InfoWindow({
                                    content: feature.content
                                });
                                google.maps.event.addListener(marker, 'click', function() {
                                    this['infowindow'].open(map, this);
                                });
                            }

                            function addInfoWindow(feature) {
                                var infowindow = new google.maps.InfoWindow({
                                    content: features.content
                                });
                            }

                            var features = data.map((result, number, arr) => {
                                let str = result['location']
                                string = str.replace(/\s/g, '')
                                let substrings = string.split(",")

                                if (result['water_state'] == 1) {
                                    var status = 'status1'
                                } else if (result['water_state'] == 2) {
                                    var status = 'status2'
                                } else if (result['water_state'] == 3) {
                                    var status = 'status3'
                                } else if (result['water_state'] == 4) {
                                    var status = 'status4'
                                }

                                let v_content = "Name: " + "<span style='color:red;'>" + result['name'] + "</span>";
                                v_content += "</br>Location: <a href='https://www.google.com/maps/place/" + result['location'] + "' style='color:blue;'>" + result['location'] + "</a>";

                                return {
                                    position: {
                                        lat: parseFloat(substrings[0]),
                                        lng: parseFloat(substrings[1])
                                    },
                                    type: status,
                                    content: v_content,
                                }
                            })
                            //console.log(features)
                            for (var i = 0, feature; feature = features[i]; i++) {
                                addMarker(feature);
                                addInfoWindow(feature);
                            }
                        },
                        error: function() {
                            console.log('lỗi');
                        }
                    });
                }
            </script>
        <?php break;
        case "detail":
        ?>
            <!-- Required datatable js -->
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/datatables/jquery.dataTables.min.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/datatables/dataTables.buttons.min.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/jszip/jszip.min.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/pdfmake/pdfmake.min.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/pdfmake/vfs_fonts.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/datatables/buttons.html5.min.js"></script>
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/libs/datatables/buttons.print.min.js"></script>
            <!-- Datatables init -->
            <script src="https://coderthemes.com/velonic/layouts/vertical/assets/js/pages/datatables.init.js"></script>
    <?php break;
        default:
            break;
    }
    ?>

    <!-- Toastr js -->
    <script src="assets/libs/toastr/toastr.min.js"></script>
    <script src="assets/js/pages/toastr.init.js"></script>
    <!-- App js -->
    <script src="assets\js\app.min.js"></script>
    </body>

    </html>