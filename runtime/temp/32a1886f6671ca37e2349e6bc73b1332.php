<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"C:\Users\Administrator\Desktop\website\public/../application/index\view\index\lunbo.html";i:1580729141;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0106)https://www.17sucai.com/preview/217732/2016-03-10/%E8%BD%AE%E6%92%AD%E5%9B%BE%E7%89%B9%E6%95%88/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>主页</title>
    <link type="text/css" rel="stylesheet" href="/lunbo/css/reset.css">
    <link type="text/css" rel="stylesheet" href="/lunbo/css/lunbostyle.css">
    <script type="text/javascript" src="/lunbo/js/jquery.min.js"></script>
    <script type="text/javascript" src="/lunbo/js/jquery_slide.js"></script>
</head>

<body>

    <div style="height:40px;"></div>


    <div class="container_image">
        <a href="javascript:void(0)" tip="0" class="i_btn prev_L"></a>
        <a href="javascript:void(0)" tip="1" class="i_btn next_R"></a>
        <ul class="slide_img">
            <?php foreach($imgs as $img): ?>
            <li>
                <a href="javascript:void(0);"><img src="<?php echo $img['image']; ?>"></a>
                <div class="icon"></div>
                <div class="bg" style="display: none;"></div>
                <div class="info" style="display: none;">
                </div>
            </li>
            <?php endforeach; ?>


        </ul>
    </div>

    <script type="text/javascript">
        $(function() {

            var newopt = {
                w2: "180", //小图宽度
                h2: "490" //小图高度 
            };

            i_slide($(".container_image"), newopt);

        });
    </script>




</body>

</html>