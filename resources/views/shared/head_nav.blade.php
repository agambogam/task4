<div class="navbar navbar-fixed-top navbar-default" role="navigation">

  <div class="container">

    <div class="navbar-header">

      <a href="/" class = "navbar-brand">Task 4</a>

    </div>

    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input class="form-control col-md-8" placeholder="Search Article" type="text" id="keywords">
      </div>
    </form>

    <div class="collapse navbar-collapse">

    <ul class="nav navbar-nav navbar-right">

      <li>{!! link_to(route('root'), "Home") !!}</li>

      <li>{!! link_to(route('imandex'), "Import and Export") !!}</li>

    </ul>

    </div>

  </div>

</div>