<?php



$GHP_ROOT_DIR =  "../../";

include_once $GHP_ROOT_DIR.'inc/config.inc.php';
include_once $GHP_ROOT_DIR.'inc/mysql.inc.php';

$SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
if ($SELF_PAGE = "bruteforce.php"){
    $ACTIVE = array('','active open','','active',"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

}

include_once $GHP_ROOT_DIR.'header.php';

$link=connect();
$html="";

//典型的问题,没有验证码,没有其他控制措施,可以暴力破解
if(isset($_POST['submit']) && $_POST['username'] && $_POST['password']){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from users where username=? and password=md5(?)";
    $line_pre = $link->prepare($sql);


    $line_pre->bind_param('ss',$username,$password);

    if($line_pre->execute()){
        $line_pre->store_result();
        if($line_pre->num_rows>0){
            $html.= '<p> login success</p>';

        } else{
            $html.= '<p> username or password is not exists～</p>';
        }

    } else{
        $html.= '<p>执行错误:'.$line_pre->errno.'错误信息:'.$line_pre->error.'</p>';
    }

}



?>


<div class="main-content" xmlns="http://www.w3.org/1999/html">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="burteforce.php">逻辑缺陷</a>
                </li>
                <li class="active">暴力破解</li>

            </ul><!-- /.breadcrumb -->

        </div>
<div class="page-content">


<div class="bruteforce">
    <div class="bruteforce_main">

        <form method="post" action="bruteforce.php">
<!--            <fieldset>-->
                <label>
														<span>
                                                            user：
															<input type="text" name="username" placeholder="Username" />
														</span>
                </label>
                </br>

                <label>
														<span>
                                                            pass：
															<input type="password" name="password" placeholder="Password" />
														</span>
                </label>


                <div class="space"></div>

                <div class="clearfix">
                    <input class="submit" name="submit" type="submit" value="登录" />
                </div>

        </form>
        <?php echo $html;?>


    </div><!-- /.widget-main -->

</div><!-- /.widget-body -->



</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->


<?php
include_once $GHP_ROOT_DIR.'footer.php';
?>
