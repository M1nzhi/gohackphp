<?php



ob_start();

if (!isset($GHP_ROOT_DIR)){
    $GHP_ROOT_DIR = '';
}


//$ACTIVE = array("active open","active","","","");

if (!isset($ACTIVE)){
    $SELF_PAGE = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
    if ($SELF_PAGE = "index.php"){
        //22 title
        $ACTIVE = array("active open","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>goHackPhp</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/bootstrap.min.css" / >
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo $GHP_ROOT_DIR;?>assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo $GHP_ROOT_DIR;?>assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo $GHP_ROOT_DIR;?>assets/js/html5shiv.min.js"></script>
    <script src="<?php echo $GHP_ROOT_DIR;?>assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo $GHP_ROOT_DIR;?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $GHP_ROOT_DIR;?>assets/js/bootstrap.min.js"></script>

</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GoHackphp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">XSS<span class="caret"></span></a>
          <ul class="dropdown-menu">

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/xss/reflected_get.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            反射型xss(get)
                        </a>
                    </li>



                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/xss/xsspost/post_login.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            反射型xss(post)
                        </a>

                    </li>


                    <li >
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/xss/xss_stored.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            存储型xss
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/xss/xss_dom.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            DOM型xss
                        </a>
                    </li>

          <!--   <li role="separator" class="divider"></li> -->
          </ul>
        </li>
      </ul>



 <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CSRF<span class="caret"></span></a>
          <ul class="dropdown-menu">
                    <li >
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/csrf/csrfget/csrf_get_login.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            CSRF(get)
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/csrf/csrfpost/csrf_post_login.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            CSRF(post)
                        </a>
                    </li>

                    <li >
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/csrf/csrftoken/token_get_login.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            CSRF Token
                        </a>
                    </li>

    
          </ul>
        </li>
      </ul>


     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">命令执行<span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li >
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/rce/rce_ping.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        exec "ping"
                    </a>
                </li>

                <li>
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/rce/rce_eval.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        exec "evel"
                    </a>
                </li>

                <li class="<?php echo $ACTIVE[92];?>" >
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/unserilization/unser.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            PHP反序列化漏洞
                        </a>
                        <b class="arrow"></b>
                </li>
          <!--   <li role="separator" class="divider"></li> -->
          </ul>
        </li>
      </ul>



     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">注入<span class="caret"></span></a>
          <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_id.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            数字型注入(post)
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_str.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            字符型注入(get)
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_search.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            搜索型注入
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_x.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            xx型注入
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_iu/sqli_login.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            "insert/update"注入
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_del.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            "delete"注入
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_header/sqli_header_login.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            "http header"注入
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_blind_b.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            盲注(base on boolian)
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_blind_t.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            盲注(base on time)
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/sqli/sqli_widebyte.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            宽字节注入
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/xxe/xxe_1.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            XXE漏洞
                        </a>
                    </li>

          </ul>
        </li>
      </ul>


     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文件包含<span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/fileinclude/fi_local.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        LFI
                    </a>
                </li>

                <li>
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/fileinclude/fi_remote.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                       RFL
                    </a>
                </li>

          <!--   <li role="separator" class="divider"></li> -->
          </ul>
        </li>
      </ul>


     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">上传漏洞<span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li>
                <a href="<?php echo $GHP_ROOT_DIR;?>vul/unsafeupload/clientcheck.php">
                    <i class="menu-icon fa fa-caret-right"></i>
                    upload bypass 1
                </a>
            </li>

            <li>
                <a href="<?php echo $GHP_ROOT_DIR;?>vul/unsafeupload/servercheck.php">
                    <i class="menu-icon fa fa-caret-right"></i>
                    upload bypass 2
                </a>
            </li>

            <li>
                <a href="<?php echo $GHP_ROOT_DIR;?>vul/unsafeupload/getimagesize.php">
                    <i class="menu-icon fa fa-caret-right"></i>
                    upload bypass 3
                </a>
            </li>
          </ul>
        </li>
      </ul>

     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">逻辑缺陷<span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li >
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/overpermission/op1/op1_login.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        水平越权
                    </a>
                </li>

                <li>
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/overpermission/op2/op2_login.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        垂直越权
                    </a>
                </li>

            <li>
                 <a href="<?php echo $GHP_ROOT_DIR;?>vul/burteforce/bruteforce.php">
                 <i class="menu-icon fa fa-caret-right"></i>
                    暴力破解
                 </a>
             </li>
          </ul>
        </li>
      </ul>


     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">目录遍历<span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li >
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/dir/dir_list.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        目录遍历
                    </a>
                </li>
          </ul>
        </li>
      </ul>

     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">URL重定向<span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li class="<?php echo $ACTIVE[102];?>" >
                    <a href="<?php echo $GHP_ROOT_DIR;?>vul/urlredirect/urlredirect.php">
                        <i class="menu-icon fa fa-caret-right"></i>
                        不安全的URL跳转
                    </a>
                    <b class="arrow"></b>
                </li>
          </ul>
        </li>
      </ul>

     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SSRF<span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li class="<?php echo $ACTIVE[107];?>" >
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/ssrf/ssrf_curl.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            SSRF(curl)
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="<?php echo $ACTIVE[108];?>" >
                        <a href="<?php echo $GHP_ROOT_DIR;?>vul/ssrf/ssrf_fgc.php">
                            <i class="menu-icon fa fa-caret-right"></i>
                            SSRF(file_get_content)
                        </a>
                        <b class="arrow"></b>
                    </li>
          </ul>
        </li>
      </ul>


<!--       <ul class="nav navbar-nav navbar-right">
        <li><a href="#">user</a></li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="main-container ace-save-state" id="main-container">
<!--     <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script> -->
</div>
