<?php
/**
 * Created by runner.han
 * There is nothing new under the sun
 */
include_once 'header.php';
include_once 'inc/config.inc.php';
$dbhost=DBHOST;
$dbuser=DBUSER;
$dbpass=DBPASS;
$dbname=DBNAME;
$setup_sucess = ''
$notification_connect = ''
$notification_create = ''
$gohack = ''

if(isset($_POST['submit'])){
    if(!@mysqli_connect($dbhost, $dbuser, $dbpass)){
        exit('数据连接失败，请仔细检查inc/config.inc.php的配置');
    }
    $link=mysqli_connect(DBHOST, DBUSER, DBPASS);
    $notification_connect.="<p class='notice'>数据库连接成功!</p>";
    $drop_db="drop database if exists $dbname";
    if(!@mysqli_query($link, $drop_db)){
        exit('初始化数据库失败，请仔细检查当前用户是否有操作权限');
    }
    $create_db="CREATE DATABASE $dbname";
    if(!@mysqli_query($link,$create_db)){
        exit('数据库创建失败，请仔细检查当前用户是否有操作权限');
    }
    $notification_create="<p class='notice'>新建数据库:".$dbname."成功!</p>";
    if(!@mysqli_select_db($link, $dbname)){
        exit('数据库选择失败，请仔细检查当前用户是否有操作权限');
    }

    $creat_users=
        "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `password` varchar(66) NOT NULL,
    `level` int(11) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4";
    if(!@mysqli_query($link,$creat_users)){
        exit('创建users表失败，请仔细检查当前用户是否有操作权限');
    }

    //往users表里面插入默认的数据
    $insert_users = "insert into `users` (`id`,`username`,`password`,`level`) values (1,'admin',md5('admin'),1),(2,'jordan',md5('jordan123'),2),(3,'test',md5('test123'),3)";

    if(!@mysqli_query($link,$insert_users)){
        echo $link->error;
        exit('创建users表数据失败，请仔细检查当前用户是否有操作权限');
    }

    $create_message=
        "CREATE TABLE IF NOT EXISTS `message` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
     `content` varchar(255) NOT NULL,
    `time` datetime NOT NULL,
     PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='stored_xss_1' AUTO_INCREMENT=56";


    if(!@mysqli_query($link,$create_message)){
        exit('创建message表失败，请仔细检查当前用户是否有操作权限');
    }

    $create_xssblind=
        "CREATE TABLE IF NOT EXISTS `xssblind` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `time` datetime NOT NULL,
    `content` text NOT NULL,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7";
    if(!@mysqli_query($link,$create_xssblind)){
        exit('创建xssblind表失败，请检查当前用户是否有操作权限');
    }



    $create_member=
        "CREATE TABLE IF NOT EXISTS `member` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(66) NOT NULL,
    `pw` varchar(128) NOT NULL,
    `sex` char(10) NOT NULL,
    `phonenum` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25";
    if(!@mysqli_query($link,$create_member)){
        exit('创建member表失败，请仔细检查当前用户是否有操作权限');
    }

    $insert_member=
        "INSERT INTO `member` (`id`, `username`, `pw`, `sex`, `phonenum`, `address`, `email`) VALUES
    (1, 'curry', md5('123456'), 'boy', '15301832192', 'warrior', 'curry@nba.com'),
    (2, 'george', md5('123456'), 'boy', '13519284851', 'warrior', 'george@nba.com'),
    (3, 'leBron', md5('123456'), 'boy', '13458192842', 'lakes', 'kobe@nba.com'),
    (4, 'durant', md5('123456'), 'boy', '13344929193', 'nets', 'durant@nba.com'),
    (5, 'westbrook', md5('123456'), 'boy', '17234671231', 'houston rockets', 'westbrook@nba.com'),
    (6, 'harden', md5('123456'), 'girl', '17724572807', 'usa', 'harden@nba.com'),
    (7, 'lillard', md5('123456'), 'girl', '18515268312', 'usa', 'lillard@pikachu.com')";

    if(!@mysqli_query($link,$insert_member)){
        exit('创建member数据失败，请仔细检查当前用户是否有操作权限');
    }


    //创建数据.创建表sqli里面http头注入的信息,httpinfo和数据
    $creat_httpinfo=
        "CREATE TABLE IF NOT EXISTS `httpinfo` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `userid` int(10) unsigned NOT NULL,
    `ipaddress` varchar(255) NOT NULL,
     `useragent` varchar(255) NOT NULL,
     `httpaccept` varchar(255) NOT NULL,
    `remoteport` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42";
    if(!@mysqli_query($link,$creat_httpinfo)){
        exit('创建httpinfo表失败，请仔细检查当前用户是否有操作权限');
    }



    $setup_sucess="<p class='notice'>创建数据库数据成功!</p>";
    $gohack="<p class='notice'>开始享受攻击吧！<a href='index.php'>点击这里</a>进入首页</p>";


}
?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
<!--                <li>-->
<!--                    <i class="ace-icon fa fa-home home-icon"></i>-->
<!--                    <a href="#">Home</a>-->
<!--                </li>-->
                <li class="active">系统初始化安装</li>
            </ul><!-- /.breadcrumb -->

        </div>
<div class="page-content">

    <div id=install_main>
        <p class="main_title">安装步骤:</p>
        <p class="main_title">1：请提前安装“mysql+php+中间件”的环境;</p>
        <p class="main_title">2：请根据实际环境修改inc/config.inc.php文件里面的参数;</p>
        <p class="main_title">3：点击“安装/初始化”按钮;</p>
        <form method="post">
            <input type="submit" name="submit" value="安装/初始化"/>
        </form>

    </div>
    <div class="info" style="color: #D6487E;padding-top: 40px;">
        <?php
        echo $notification_connect;
        echo $notification_create;
        echo $setup_sucess;
        echo $gohack;
        ?>

    </div>

</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->