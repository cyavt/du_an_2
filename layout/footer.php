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
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    
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
                status0: {
                    icon: '/assets/images/icon/life-jacket1.png'
                },
                status50: {
                    icon: '/assets/images/icon/life-jacket2.png'
                },
                status100: {
                    icon: '/assets/images/icon/life-jacket3.png'
                }
            };

            $.ajax({
                url: "http://envican.app/data/getMaps",
                dataType: "json",
                success: function(data) {
                    console.log(data)
                    function addMarker(feature) {
                        var marker = new google.maps.Marker({
                            position: feature.position,
                            icon: icons[feature.type].icon,
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
                        if (result['garbagepercent'] <= 30) {
                            var status = 'status0'
                        } else if (result['garbagepercent'] <= 80) {
                            var status = 'status50'
                        } else {
                            var status = 'status100'
                        }

                        let v_content = "Tên: " +result['garbagepercent']+ "%";
                            v_content += "</br>Vị trí: <a href='https://www.google.com/maps/place/" +result['location']+"' style='color:blue;'>" +result['location']+"</a>";

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

    
    <!-- Vendor js -->
    <script src="assets\js\vendor.min.js"></script>

    <script src="assets\libs\moment\moment.min.js"></script>
    <script src="assets\libs\jquery-scrollto\jquery.scrollTo.min.js"></script>
    <script src="assets\libs\sweetalert2\sweetalert2.min.js"></script>

    <!-- Chat app -->
    <script src="assets\js\pages\jquery.chat.js"></script>

    <!-- Todo app -->
    <script src="assets\js\pages\jquery.todo.js"></script>

    <!--Morris Chart-->
    <script src="assets\libs\morris-js\morris.min.js"></script>
    <script src="assets\libs\raphael\raphael.min.js"></script>

    <!-- Sparkline charts -->
    <script src="assets\libs\jquery-sparkline\jquery.sparkline.min.js"></script>

    <!-- Dashboard init JS -->
    <script src="assets\js\pages\dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets\js\app.min.js"></script>
    </body>

    </html>