<!DOCTYPE html>

  <html>

    <head>

      <meta charset="utf-8">

      <meta httpequiv="XUACompatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel Task 4</title>

      <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />

      <link href="/css/material-design/bootstrap-material-design.css" rel="stylesheet" />

      <link href="/css/material-design/ripples.css" rel="stylesheet" />

      <link href="/css/custom/layout.css" rel="stylesheet" />

      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    </head>

    <body style="padding-top:60px;">

      <!--bagian navigation-->

      @include('shared.head_nav')

      <!-- Bagian Content -->

      <div class="container clearfix">

        @if (Session::has('error'))

          <div class="alert alert-danger">

              {{Session::get('error')}}

          </div>

        @endif

        @if (Session::has('notice'))

          <div class="alert alert-info">

              {{Session::get('notice')}}

          </div>

        @endif

        @if (Session::has('success'))

          <div class="alert alert-success">

              {{Session::get('success')}}

          </div>

        @endif

        <div id="data-content">
          @yield("content")
        </div>
        <input id="direction" type="hidden" value="asc" />

      </div>

      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

      <script src="/js/bootstrap/bootstrap.js"></script>

      <script src="/js/material-design/material.js"></script>

      <script src="/js/material-design/ripples.js"></script>

      <script src="/js/custom/layout.js"></script>   

    <script>
    $('#keywords').on('keyup', function(){
      $.ajax({
        url : '/articles',
        type : 'GET',
        dataType : 'json',
        data : {
          'keywords' : $('#keywords').val(),
          'direction' : $('#direction').val()
        },
        success : function(data) {
          $('#data-content').html(data['view']);
          $('#keywords').val(data['keywords']);
          $('#direction').val(data['direction']);
        },
        error : function(xhr, status) {
          console.log(xhr.error + " ERROR STATUS : " + status);
        },
        complete : function() {
          alreadyloading = false;
        }
      });
    });
    </script>
    </body>

  </html>