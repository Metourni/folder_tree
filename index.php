<?php
/**
 * Created by PhpStorm.
 * User: Noureddine
 * Date: 03/01/2018
 * Time: 20:51
 */
?>




<?php
require_once './DAL/Dfa.php';
require_once './views/TreeView.php'
?>


<!doctype html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" href="assets/vakata-jstree/dist/themes/default/style.min.css"/>
    <style>
        .container {
            width: 100%;
            margin-right: 100px;
            margin-left: 100px;
            margin-top: 50px;
        }

        .tree {
            width: 30%;
            background-color: #8699a4;
        }

        li.file-tree .jstree-icon.jstree-themeicon.jstree-themeicon-custom {
            background-size: 95% !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="tree">

        <div id="jstree_div">
            <ul>
                <?php

                try {
                    $dfa = new Dfa();
                    $trv = new TreeView();
                    $datas = $dfa->getFolderTree('./data/example');
                    echo $trv->arrayToListView($datas);
                } catch (Exception $exception) {
                    echo '<script>alert("error :' . $exception . ' ");</script>';
                }

                ?>
            </ul>
        </div>
    </div>
</div>


<script src="assets/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vakata-jstree/dist/jstree.min.js" type="text/javascript"></script>
<script src="assets/glyphicons/glyphicons.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#jstree_div').jstree();

    });
</script>

</body>
</html>
