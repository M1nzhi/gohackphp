<?php


include_once 'inc/config.inc.php';

include "header.php";

$html="";


if(!@mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME)){
    $html.=
        "<p >
        <a href='install.php' style='color:red;'>
        提示:欢迎使用,连接数据库失败，请检查数据库配置!
        </a>
    </p>";
}

?>


<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li class="active">系统介绍</li>
            </ul>
        </div>
<div class="page-content">
    <?php echo $html;?>
    <div id="intro_main">
        <p class="p1">
        <h2 class="v_title">漏洞列表</h2>
        <ul class="vul_list_info">
            <li>Burt Force(暴力破解漏洞)</li>
            <li>XSS(跨站脚本漏洞)</li>
            <li>CSRF(跨站请求伪造)</li>
            <li>SQL-Inject(SQL注入漏洞)</li>
            <li>RCE(远程命令/代码执行)</li>
            <li>Files Inclusion(文件包含漏洞)</li>
            <li>Unsafe file downloads(不安全的文件下载)</li>
            <li>Unsafe file uploads(不安全的文件上传)</li>
            <li>Over Permisson(越权漏洞)</li>
            <li>../../../(目录遍历)</li>
            <li>I can see your ABC(敏感信息泄露)</li>
            <li>PHP反序列化漏洞</li>
            <li>XXE(XML External Entity attack)</li>
            <li>不安全的URL重定向</li>
            <li>SSRF(Server-Side Request Forgery)</li>
        </ul>
        </p>
        <h2>安装使用</h2>
        <p>
            - 1. gohackphp基于php编写，使用mysql数据库。windows下可以用phpstudy，linux下可以用lnmp。接下来:<br/>
            - 2. 把下载下来的gohackphp文件夹放到web服务器根目录下;<br/>
            - 3. 修改inc/config.inc.php里面的数据库连接配置;<br/>
            - 4. 本地访问http://127.0.0.1
        </p>
        <h2>有问题请发邮件</h2>
        <p class="p4">
            Email:1205868774@qq.com<br/>
        </p>


    </div>


</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->



<?php
include "footer.php";
?>