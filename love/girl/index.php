

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOVE YOU</title>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" >
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js" ></script>
	<script src="https://cdn.bootcss.com/clipboard.js/1.7.1/clipboard.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<div class="container">
    <div class="row col-md-3"></div>
    <div class="row col-md-6" >
        <div class="row question">
            <div class="col-md-6 col-xs-12">
                <p style="line-height: 50px;font-size: 10px;">“小静静，我观察你很久了”</p>
                <p style="line-height: 50px;font-size: 20px;">做我女朋友好不好？</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <img src="http://ozef40uqu.bkt.clouddn.com/1.png" alt="" style="height: 200px;">
            </div>
        </div>
        <div class="row question" style="margin-top: 20px;">
            <div class="col-md-6 col-xs-6" style="text-align: center;">
			<script>
    var clipboard = new Clipboard('.hongbao', {
        text: function () {
            return '3mCRTh04iA';
        }
    });
</script>
                <button type="button" class="btn btn-success" style="width: 80%" id="no">好</button>
            </div>
            <div class="col-md-6 col-xs-6" style="text-align: center;">
                <button type="button" class="btn btn-danger" style="width: 80%" id="ok">不好</button>
            </div>
        </div>
        <div class="col-md-12 col-xs-12 hide" id="success">
            <img src="http://ozef40uqu.bkt.clouddn.com/666.jpg" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row col-md-3"></div>

</div>
<script>
    var i=1;
    var ok=false;
    $(document).ready(function(){
        $("#no").click(function(){
            alert("真的吗？你答应了？");
            alert("给我发消息吧，爱你");
            $(".question").addClass('hide');
            $("#success").removeClass('hide');
            ok=true;
        });
        $("#ok").click(function(){
            switch(i){
                case 1:
                    alert("工资上交");
                    break;
                case 2:
                    alert("家务全包");
                    break;
                case 3:
                    alert("房产证写你的名字");
                    break;
				case 4:
                    alert("保大");
                    break;
                case 5:
                    alert("我妈会游泳");
                    break;
                case 6:
                    alert("不跟你吵架，会撒娇 会卖萌");
                    break;
                default:
                    alert("答应我吧");
            }
            i++;
        });
    });
</script>
</audio>  <div style="display:none"><script src="https://s13.cnzz.com/z_stat.php?id=1272945483&web_id=1272945483" language="JavaScript"></script><div>
</body>
</html>