<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adaptive Environmental Monitoring Networks for East Africa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <style>
        #collapseExample.collapse:not(.show) {
        display: block;
        height: 3rem;
        overflow: hidden;
        }

        #collapseExample.collapsing {
        height: 3rem;
        }
    </style>
    @include('website.links')

    <!-- =======================================================
  * Template Name: Green - v4.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('website.top_bar')

    <!-- ======= Header ======= -->
    @include('website.header')
    <!-- End Header -->

    <main id="main">

<div class="container">
<div class="card card-default"> 
        <div class="card-header"><h2 class="text-center">AdeMNEA Publications</h2></div>
            <div class="card body">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Title</th>
                         <th>Publisher</th> 
                        <th>Year of Publication</th>
                        <th>Download link</th>
                    </thead>
                    <tbody>
                        @foreach($publication as $item)
                        <tr>
                            <td>{{$item -> name}}</td>
                            <td>{{$item -> title}}</td>
                            <td>{{$item -> publisher}}</td>
                            <td>{{$item -> year}}</td>
                            <td><a href="{{asset('storage/' . $item->attachment)}}" target="_blank"><i class="fa fa-download"></i>Download</a></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
</div>
 

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('website.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('website.scripts')

</body>

</html>
























