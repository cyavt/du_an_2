<!DOCTYPE HTML>
<html>

<head>
    <title>Innovation LAB</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="icon" type="image/x-icon" href="./images/LOGO-N.png">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <!-- style -->
    <style>
        .center {
            text-align: center;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* mặc định được ẩn đi */
            position: fixed;
            /* vị trí cố định */
            z-index: 1;
            /* Ưu tiên hiển thị trên cùng */
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Silde */

        .mySlides3 {
            display: none;
            width: 100%
        }

        .display-container {
            position: relative
        }

        /*---Css Nút qua lại---*/
        .button-left {
            left: 1%;
            font-size: 20px
        }

        .button-right {
            right: 1%;
            font-size: 20px
        }

        .image-button {
            border: none;
            display: inline-block;
            padding: 10px;
            height: 50px;
            vertical-align: middle;
            overflow: hidden;
            color: #fff;
            background: #000;
            position: absolute;
            top: calc(50% - 25px);
            opacity: 0.5;
        }

        .image-button:hover {
            color: #000;
            background: #ccc;
        }

        /*---Css Chấm tròn---*/
        .badge {
            text-align: center;
            margin-bottom: 16px;
            font-size: 20px;
            position: absolute;
            bottom: 0;
        }

        .badge-white {
            color: #000 !important;
            background-color: #fff !important
        }

        .image-badge {
            display: inline-block;
            border-radius: 50%;
            height: 14px;
            width: 14px;
            border: 1px solid #ccc;
        }

        .image-badge:hover {
            background: #fff;
        }
    </style>
</head>