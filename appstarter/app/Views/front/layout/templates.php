<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Orlando - Creative HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url(); ?>/image/logo.png" type="image/x-icon">
    <title><?= $title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>\mdb\assets\css\bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/depan/assets/css/style.css">
    <link href="<?php echo base_url(); ?>/mdb/assets/css/font-awesome.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>/depan/assets/bootstrap/js/html5shiv.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="<?= base_url(); ?>/depan/assets/js/modernizr.custom.js"></script>
</head>

<body class="cssAnimate ptn13">
    <?php
    $uri = service('uri');
    ?>
    <div class="ct-preloader">
        <div class="ct-preloader-content"></div>
    </div>
    <div class="ct-mainNav ct-js-background" data-bg="<?= base_url(); ?>/depan/assets/images/menu-pattern.jpg">
        <div class="ct-mainNav-inner">
            <nav>
                <a class="ct-mainNav-logo" href="index.html">
                    <img src="<?= base_url(); ?>/image/logo.png" alt="WARJAM Logo">
                </a>
                <hr class="hr-custom ct-js-background" data-bg="<?= base_url(); ?>/depan/assets/images/hr1.png">
                <ul class="ct-mainNav-nav text-uppercase animated" data-fx="fadeIn">
                    <li class="">
                        <button class="btn btn-lg btn-button--brown checkout">CHECKOUT</button>
                    </li>
                    <hr class="hr-custom ct-js-background" data-bg="<?= base_url(); ?>/depan/assets/images/hr1.png">
                    <li class="<?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
                        <a href="/">Home</a>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'menu' ? 'active' : null) ?>">
                        <a href="/menu">Menu</a>
                    </li>
                    <li class="dropdown">
                        <a href="">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="">Gallery</a>
                    </li>
                    <li class="dropdown">
                        <a href="">Blog</a>
                    </li>
                    <li class="<?= ($uri->getSegment(1) == 'contact-us' ? 'active' : null) ?>">
                        <a href="/contact-us">Contact</a>
                    </li>

                </ul>
                <hr class="hr-custom ct-js-background" data-bg="<?= base_url(); ?>/depan/assets/images/hr1.png">
            </nav>

        </div>
    </div>

    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <div class="ct-navbarMobile ct-navbarMobile--inverse">
            <a class="navbar-brand" href="index.html"></a>
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


        </div>


        <?= $this->renderSection('sidebar'); ?>

        <?= $this->renderSection('content'); ?>



        <a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>
    </div>

    <?= $this->renderSection('modals'); ?>
    <div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalJudul"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="shopping-cart" id="shopping-cart">
                                <!-- Product #1 -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <h4 id="totalHarga" class="ct-u-font1">Total Harga : </h4>
                    <button type="button" class="btn btn btn-lg btn-block btn-button--dark" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-lg btn-block btn-button--dark" data-toggle="modal" id="goToOngkir">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal2" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <h3 class="ct-u-font1 text-uppercase text-center">drop Point</h3>
                    <hr class="hr-custom ct-js-background" data-bg="<?= base_url(); ?>/depan/assets/images/hr2.png" data-bgrepeat="no-repeat">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="nama_pemesan" placeholder="Nama Anda" required type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select id="daerah_pemesan" required class="form-control input-lg">

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="alamat_pemesan" placeholder="Alamat Lengkap" required type="text" class="form-control input-lg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <h4 id="ongkir" class="ct-u-font1">Total Ongkir : </h4>
                    <h4 id="totalWithOngkir" class="ct-u-font1">Total Bayar : </h4>
                    <button type="button" class="btn btn btn-lg btn-block btn-button--dark" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-lg btn-block btn-button--dark" id="finalCheckout">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScripts -->
    <script src="<?= base_url(); ?>\mdb\assets\js\jquery-3.1.1.min.js"></script>
    <script src="<?= base_url(); ?>\mdb\assets\js\bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/jquery.placeholder.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/device.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/jquery.browser.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/snap.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/jquery.appear.js"></script>

    <script src="<?= base_url(); ?>/depan/assets/js/masonry.min.js"></script>


    <script src="<?= base_url(); ?>/depan/assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/plugins/owl/init.js"></script>

    <script src="<?= base_url(); ?>/depan/assets/js/portfolio/imagesloaded.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/image-box/init.js"></script>

    <script src="<?= base_url(); ?>/depan/assets/js/retina.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/select2/select2.js"></script>
    <script src="<?= base_url(); ?>/depan/assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            var totalPrice = 0;

            $("#myModal2").on('show.bs.modal', function(e) {
                $("#modalMenu").modal("hide");
            });

            $("#daerah_pemesan").change(function() {
                var ongkir = $(this).children("option:selected").data('cost');
                ongkir = parseInt(ongkir, 10);
                console.log($(this).children("option:selected").val());
                document.getElementById('ongkir').innerHTML = 'Total Ongkir : ' + formatter.format(ongkir);
                document.getElementById('totalWithOngkir').innerHTML = 'Total Bayar : ' + formatter.format(totalPrice + ongkir);
            });




            //button identity
            $(document).on('click', '#goToOngkir', function() {
                var nomor_meja = '<?= session()->nomor_meja; ?>';

                if (!nomor_meja == '') {
                    console.log(nomor_meja);

                    //cart biasa
                    var cart = [];
                    $(".item-cart").each(function(i) {
                        var jumlah = $(this).find('input:text.quantity_val').val();
                        var id = $(this).data('id');
                        var item = {
                            id: id,
                            jumlah: jumlah,
                        };
                        cart.push(item);

                    });

                    //cart secret
                    var secret = [];
                    $(".item-cart-secret").each(function(i) {
                        var jumlah = $(this).find('input:text.quantity_val').val();
                        var id = $(this).data('id');
                        var item = {
                            id: id,
                            jumlah: jumlah,
                        };
                        secret.push(item);

                    });
                    console.log('sampe sini');
                    $.ajax({
                        type: 'POST',
                        url: "/order-secret",
                        data: {
                            cart: cart,
                            secret: secret,
                            nomor_meja: nomor_meja,
                        },
                        dataType: "json",
                        success: function(data) {
                            $('#modalMenu').modal('toggle');
                            var link = 'https://api.whatsapp.com/send?phone=62811591002&text=' + data.pesan;
                            var redirectWindow = window.open(link, '_blank');
                            redirectWindow.location;
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(jqXHR.statusText);
                        }

                    })
                } else {
                    $.ajax({
                        type: 'GET',
                        url: "/get-daerah",
                        dataType: "json",
                        success: function(data) {
                            $('#myModal2').modal('show');

                            $('#daerah_pemesan').empty();
                            document.getElementById('daerah_pemesan').innerHTML += '<option value="" data-id="" disabled selected>Pilih Daerah Kamu</option>';

                            $.each(data, function(key, value) {
                                document.getElementById('daerah_pemesan').innerHTML += '<option value="' + data[key]['daerah_id'] + '" data-id="' + key + '" data-cost="' + data[key]['ongkos'] + '">' + data[key]['nama_daerah'] + '</option>';
                            });

                            document.getElementById('totalWithOngkir').innerHTML = 'Total Bayar : ' + formatter.format(totalPrice);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(jqXHR.statusText);
                        }
                    })
                }

            });
            var item;
            var secret;
            // button checkout inc
            $(document).on('click', '.checkout', function() {
                $.ajax({
                    type: 'GET',
                    url: "/get-menu",
                    dataType: "json",
                    success: function(data) {
                        item = data.cart;
                        secret = data.secret;
                        $('#shopping-cart').empty();
                        $.each(item, function(key, value) {
                            document.getElementById('shopping-cart').innerHTML += '<div class="item-cart" data-id="' + item[key]['id'] + '">' +
                                '<div class="buttons-cart" id="delete-cart" data-id="' + key + '">' +
                                '<span class="delete-btn fa fa-times"></span>' +
                                '</div>' +
                                '<div class="description">' +
                                '<p id="nama-menu">' + item[key]['nama'] + '</p>' +
                                '<span id="deskripsi-menu">' + item[key]['deskripsi'] + '</span>' +
                                '</div>' +
                                '<div class="quantity" id="jumlahPesanan">' +
                                '<button class="button-quantity minus-btn" type="button" name="button" data-id="' + key + '">' +
                                '-' +
                                '</button>' +
                                '<input type="text" name="quantity" value="1" class="quantity_val" disabled>' +
                                '<button class="button-quantity plus-btn" type="button" name="button" data-id="' + key + '">' +
                                '+' +
                                '</button>' +
                                '</div>' +
                                '<div class="total-price" id="harga' + key + '">' + formatter.format(item[key]['harga']) + '</div>' +
                                '</div>';
                        });

                        $.each(secret, function(key, value) {
                            document.getElementById('shopping-cart').innerHTML += '<div class="item-cart-secret" data-id="' + secret[key]['id'] + '">' +
                                '<div class="buttons-cart" id="delete-cart-secret" data-id="' + key + '">' +
                                '<span class="delete-btn fa fa-times"></span>' +
                                '</div>' +
                                '<div class="description">' +
                                '<p id="nama-menu">' + secret[key]['nama'] + '</p>' +
                                '<span id="deskripsi-menu">' + secret[key]['deskripsi'] + '</span>' +
                                '</div>' +
                                '<div class="quantity" id="jumlahPesanan">' +
                                '<button class="button-quantity minus-btn-secret" type="button" name="button" data-id="' + key + '">' +
                                '-' +
                                '</button>' +
                                '<input type="text" name="quantity" value="1" class="quantity_val" disabled>' +
                                '<button class="button-quantity plus-btn-secret" type="button" name="button" data-id="' + key + '">' +
                                '+' +
                                '</button>' +
                                '</div>' +
                                '<div class="total-price" id="harga' + key + '">' + formatter.format(secret[key]['harga']) + '</div>' +
                                '</div>';
                        });

                        $('#modalMenu').modal('show');
                        totalPrice = 0;
                        $(".total-price").each(function(i) {
                            var sd = $(this).html().replace(/[^0-9]/gi, '');
                            var price = parseInt(sd, 10);
                            totalPrice += price;
                        });
                        document.getElementById('totalHarga').innerHTML = 'Total Harga : ' + formatter.format(totalPrice);
                    }
                })
            });



            $(document).on('click', '#delete-cart', function() {
                var id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "/delete-cart",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(data) {
                        alert(data.sukses);
                        $(".close").click();
                        setTimeout(function() {
                            $(".checkout").click();
                        }, 1000);


                    }
                })
            });

            $(document).on('click', '#delete-cart-secret', function() {
                var id = $(this).data('id');
                $.ajax({
                    type: 'POST',
                    url: "/delete-cart-secret",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(data) {
                        alert(data.sukses);
                        $(".close").click();
                        setTimeout(function() {
                            $(".checkout").click();
                        }, 1000);


                    }
                })
            });

            $(document).on("click", ".minus-btn", function() {
                var harga;
                var $this = $(this);
                var id = $(this).data('id');
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value > 1) {
                    value = value - 1;
                } else {
                    value = 1;
                }

                $input.val(value);
                harga = item[id]['harga'];
                var total = value * harga;
                $('#harga' + id).text(formatter.format(total));

                totalPrice = 0;
                $(".total-price").each(function(i) {
                    var sd = $(this).html().replace(/[^0-9]/gi, '');
                    var price = parseInt(sd, 10);
                    totalPrice += price;
                });
                document.getElementById('totalHarga').innerHTML = 'Total Harga : ' + formatter.format(totalPrice);
            });

            $(document).on("click", ".plus-btn", function() {
                var harga;
                var $this = $(this);
                var id = $(this).data('id');
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value <= 100) {
                    value = value + 1;
                } else {
                    value = 100;
                }
                $input.val(value);
                harga = item[id]['harga'];
                var total = value * harga;
                $('#harga' + id).text(formatter.format(total));

                totalPrice = 0;
                $(".total-price").each(function(i) {
                    var sd = $(this).html().replace(/[^0-9]/gi, '');
                    var price = parseInt(sd, 10);
                    totalPrice += price;
                });
                document.getElementById('totalHarga').innerHTML = 'Total Harga : ' + formatter.format(totalPrice);
            });


            $(document).on("click", ".minus-btn-secret", function() {
                var harga;
                var $this = $(this);
                var id = $(this).data('id');
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value > 1) {
                    value = value - 1;
                } else {
                    value = 1;
                }

                $input.val(value);
                harga = secret[id]['harga'];
                var total = value * harga;
                $('#harga' + id).text(formatter.format(total));

                totalPrice = 0;
                $(".total-price").each(function(i) {
                    var sd = $(this).html().replace(/[^0-9]/gi, '');
                    var price = parseInt(sd, 10);
                    totalPrice += price;
                });
                document.getElementById('totalHarga').innerHTML = 'Total Harga : ' + formatter.format(totalPrice);
            });

            $(document).on("click", ".plus-btn-secret", function() {
                var harga;
                var $this = $(this);
                var id = $(this).data('id');
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value <= 100) {
                    value = value + 1;
                } else {
                    value = 100;
                }
                $input.val(value);
                harga = secret[id]['harga'];
                var total = value * harga;
                $('#harga' + id).text(formatter.format(total));

                totalPrice = 0;
                $(".total-price").each(function(i) {
                    var sd = $(this).html().replace(/[^0-9]/gi, '');
                    var price = parseInt(sd, 10);
                    totalPrice += price;
                });
                document.getElementById('totalHarga').innerHTML = 'Total Harga : ' + formatter.format(totalPrice);
            });



            $(document).on('click', '#finalCheckout', function() {
                var daerah_id = $('#daerah_pemesan').children("option:selected").val();
                var nama_pemesan = $('#nama_pemesan').val();
                var alamat_pemesan = $('#alamat_pemesan').val();
                console.log(daerah_id);
                console.log(nama_pemesan);
                console.log(alamat_pemesan);
                var cart = [];
                $(".item-cart").each(function(i) {
                    var jumlah = $(this).find('input:text.quantity_val').val();
                    var id = $(this).data('id');
                    var item = {
                        id: id,
                        jumlah: jumlah,
                    };
                    cart.push(item);

                });

                $.ajax({
                    type: 'POST',
                    url: "/order",
                    data: {
                        cart: cart,
                        nama_pemesan: nama_pemesan,
                        alamat_pemesan: alamat_pemesan,
                        daerah_id: daerah_id,
                    },
                    dataType: "json",
                    success: function(data) {
                        $('#myModal2').modal('toggle');
                        var link = 'https://api.whatsapp.com/send?phone=62811591002&text=' + data.pesan;
                        var redirectWindow = window.open(link, '_blank');
                        redirectWindow.location;
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert(jqXHR.statusText);
                    }

                })
            });


            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            })
        });
    </script>
    <?= $this->renderSection('script'); ?>

</body>

</html>