<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="//cdn.bootcss.com/flat-ui/2.2.2/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/flat-ui/2.2.2/css/flat-ui.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>static/admin/css/admin_base.css">
    <script src="//cdn.bootcss.com/flat-ui/2.2.2/js/vendor/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/flat-ui/2.2.2/js/flat-ui.min.js"></script>
</head>
<body class="login-body">
    <div class="login-panel">
        <div class="login-panel-top">
            <div class="login-avatar"></div>
        </div>
        <div class="login-panel-bottom">
            <form action="#" method="post">
                <div class="form-group input-group">
                    <span class="input-group-addon fui-user"></span>
                    <input type="text" name="username" id="username" placeholder="用户名" class="form-control">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fui-lock"></span>
                    <input type="text" name="password" id="password" placeholder="密码" class="form-control">
                </div>
                <div class="form-group input-group">
                    <span class="input-group-addon fui-new"></span>
                    <input type="text" name="captcha" id="captcha" placeholder="请输入验证码" class="form-control">
                </div>
                <div class="form-group">
                    <?php echo $captcha;?>
                </div>
                <div class="form-group">
                    <button style="width: 100%;" type="submit" class="btn btn-primary">登 录</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    var selectors = ['#username', '#password', '#captcha'];
    for(var key in selectors){
        $(selectors[key]).focus(function(){
            $(this).prev().addClass('green');
        }).blur(function(){
            $(this).prev().removeClass('green');
        });
    }
</script>
</html>
