<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#" style="color:#FFF">CHAT MEMORIUM</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="nav-link"><?php if (isset($_SESSION['nombre'])) {
    echo $_SESSION['nombre'];
}
?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<!-- /container -->
