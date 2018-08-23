<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="{{ url('/') }}">
        <img class="img-responsive" src="{{ asset('asset/img/logo.svg') }}" alt="logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="nav navbar-nav navbar-right">
        <li ><a  href="{{ url('transaction-list') }}">Lista Transacciones <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div>
</nav>