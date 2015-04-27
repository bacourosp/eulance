<?php
/**
 * Created by PhpStorm.
 * User: gmarten
 * Date: 23/04/15
 * Time: 15:31
 */

include_once "components/common.php";
?>

<div class="navbar navbar-default">
    <div class="container">
        <div class="row vertical-align">
            <div class="col-md-2">
                <a href="#"><img src="assets/img/logo_eulance_star.png" class="img-responsive"></a>
            </div>
            <div id="main-header-content" class="col-md-7">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="link"><?php echo $xmlLang->navigation->register; ?></a>
                        </li>
                        <li>
                            <a href="#" class="link"><?php echo $xmlLang->navigation->login; ?></a>
                        </li>
                        <li>
                            <a href="#" class="link"><?php echo $xmlLang->navigation->howto; ?></a>
                        </li>
                        <li>
                            <a href="#" class="link"><?php echo $xmlLang->navigation->contact; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="btn-group btn-group-lg">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
