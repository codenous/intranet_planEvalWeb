<?php

function getLinks()
{
    $link = '
        <link rel="stylesheet" href="'.base_url().'assets/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="'.base_url().'assets/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="'.base_url().'assets/css/skins/_all-skins.min.css">
        
        <link rel="stylesheet" href="'.base_url().'assets/plugins/steps/jquery.steps.css">


        <script src="'.base_url().'assets/js/jquery.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="'.base_url().'assets/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="'.base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="'.base_url().'assets/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="'.base_url().'assets/js/app.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="'.base_url().'assets/js/demo.js"></script>
        <script src="'.base_url().'assets/plugins/chartjs/Chart.min.js"></script>
        <script src="'.base_url().'assets/plugins/steps/jquery.steps.min.js"></script>';
    return $link;
}
