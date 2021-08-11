<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="objects/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="remember_ajax.js"></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                <a href="http://honey-hunters.ru"><img src="objects/img/logotype.png" height="70" width="360"></a>
            </div>
        </div>
    </div>
    <div class="container contact">
        <div class="row">
            <div class="col text-center">
                <img src="objects/img/mail.png" height="300" width="300">
            </div>
        </div>
    </div>
    <div class="container">
        <form id="add_comment" action="insert.php" method="POST">
            <div class="d-flex flex-column flex-xs-column flex-sm-column flex-md-column flex-lg-row flex-xl-row align-items-start justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="form-row">
                        <div class="form-group required">
                            <div class="label">
                                <label for="name" class="control-label">Имя <span class="labelclass">*</span></label>
                                <i class="fa fa-check fa-2x icon" aria-hidden="true"></i>
                            </div>
                            <input name="name" type="text" maxlength="10" class="form-control form-control-lg" id="name" required="required">
                        </div>
                        <div class="form-group required">
                            <div class="label-wrapper">
                                <label for="email" class="control-label">E-Mail <span class="labelclass">*</span></label>
                                <i class="fa fa-times fa-2x icon" aria-hidden="true"></i>
                            </div>
                            <input name="email" type="email" maxlength="25" class="form-control form-control-lg" id="email" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="form-row">
                        <div class="form-group required">
                            <div class="label-wrapper">
                                <label for="comment" class="control-label">Комментарий <span class="labelclass">*</span></label>
                                <i class="fa fa-check fa-2x icon" aria-hidden="true"></i>
                            </div>
                            <textarea name="comment" maxlength="50" class="form-control form-control-lg" id="comment" required="required"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-lg-end justify-content-xl-end">
                        <button type="submit" class="btn btn-danger btn-lg button" id="write">Записать</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
<div class="row">
<div class="col text-center comment-title">Выводим комментарии</div>
</div>
<div id="ajax_response"> </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                    <a href="http://honey-hunters.ru"><img src="objects/img/logotype.png" height="60" width="300"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-lg-end justify-content-xl-end">
                    <a href="https://vk.com/id368675475" style="margin-right: 30px;">
                        <img src="objects/img/vk.png" height="65" width="65">
                    </a>
                    <a href="https://www.facebook.com/honeyhuntersmanagement">
                        <img src="objects/img/fb.png" height="65" width="65">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>