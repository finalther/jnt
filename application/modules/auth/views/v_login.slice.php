<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Express JNE</title>
        <!-- global stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/app.min.css')?>">
        <link href="<?=base_url('assets/plugins/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    </head>
    <body class="login" >
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="padding: 0px;">
                    <div class="navbar nav_title" style="background: #4da6ff; width: 100%; height: 50%">
                        <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>JNT OR JNE</span></a>
                    </div>
                </div>
                <div class="col-md-4" style="padding: 0px;">
                    <div class="navbar nav_title" style=" width: 100%;background: #82c0ff;">
                        <div class="site_title">
                        <form action="#" method="post" id="login_form">
                            <input type="text" name="username" placeholder="Username" class="form-control" style="width: 40%; display:  inline" />
                            <input type="password" name="password" placeholder="Password" class="form-control" style="width: 40%; display:  inline"/>
                            <button type="submit" class="btn btn-default" id="login" style="margin: 0px;">Log in</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <img src="<?=base_url('assets/images/banner.jpg');?>" style="width:1366px;height: 450px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="padding: 25px; background-color: #0098EF;">
                    <form action="#" method="post">
                            <input type="text" name="cek_resi" placeholder="Masukkan no.resi" class="form-control" style="width: 40%; display:  inline"/>
                            <button type="submit" class="btn btn-success">Cek resi</button>
                    </form>
                </div>
                <div class="col-md-6" style="background-color: #82C0FF; padding:25px;">
                    <form action="#" method="post">
                            <input type="text" name="cek_ongkir" placeholder="Kota Asal" class="form-control" style="width: 40%; display:  inline"/>
                            <label style="color: white;">ke</label>
                            <input type="text" name="cek_ongkir" placeholder="Kota Tujuan" class="form-control" style="width: 40%; display:  inline"/>
                            <button type="submit" class="btn btn-warning">Cek Ongkir</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding:0px;">
                    <footer style="margin: 0px;">
                      <div class="center">
                            Copyright 2018 @ by IDR
                      </div>
                      <div class="clearfix"></div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="<?=base_url('assets/js/app.min.js')?>"></script>
        <!-- validator -->
        <script src="<?=base_url('assets/plugins/jquery-validation/jquery.validate.min.js')?>"></script>    
        <script>
            $(document).ready(function() {
                $('#login_form').validate({
                    rules: {
                        username: {
                            required: false
                        },
                        password: {
                            required: false
                        }
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "<?=base_url('auth/do_login')?>",
                            type: 'post',
                            dataType: 'json',
                            data: $('#login_form').serializeArray(),
                            beforeSend: function() {},
                            success: function(data) {
                                $("#password").val('');
                                if (data.error == true) {
                                    alert(data.message);
                                } else {
                                    window.location.href = "<?=base_url('home')?>";
                                }
                            }

                        });
                    }
                });

                $('#register_form').validate({
                    rules: {
                        username: {
                            required: true,
                        },
                        password: {
                            required: true,
                            minlength: 8,
                            maxlength: 12,
                        },
                        confirm_password: {
                            minlength: 8,
                            maxlength: 12,
                            equalTo: "#password",
                        }

                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "<?=base_url()?>",
                            type: 'post',
                            dataType: 'json',
                            data: $('#register_form').serializeArray(),
                            beforeSend: function() {},
                            success: function(data) {
                                $('#register_form')[0].reset();
                                alert(data.message);
                            }

                        });
                    }
                });
            }); 
        </script>
    <!-- datatables -->
    <script src="<?=base_url('assets/plugins/datatables/js/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('assets/plugins/datatables/js/dataTables.bootstrap.js')?>"></script>
    <!-- delete js -->
    <script src="<?=base_url('assets/js/delete.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    </body>
</html>