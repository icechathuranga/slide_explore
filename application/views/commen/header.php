<html>

    <head>
        <?php
        if (!empty($css_extra)) {

            foreach ($css_extra as $key => $css_add) {
                if (sizeof($css_add) == 1) {
                    $path = 'css/';
                    $file = $css_add[0];
                } else {
                    $path = $css_add[0];
                    $file = $css_add[1];
                }
                echo '<link rel="stylesheet" href="' . $app['base_url'] . $path . $file . '.css">' . "\n";
            }
        }
        ?>
    </head>
    <body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


