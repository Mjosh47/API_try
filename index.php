<?php
    require_once "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjContents->main_content();
    $ObjLayouts->banner();

    $ObjContents->sidebar();
    $ObjLayouts->footer();