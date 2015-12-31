<div class="container header">
    <div class="logo pull-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="/">
            <img src="/assets/img/logo.png" alt="V-ELMS" style="margin-top: -3px;">
        </a>
    </div>
    <div class="auth nav navbar-nav pull-right">
        <a href="/auth/login" class="btn btn-primary">Login</a>
        <a href="/auth/register" class="btn btn-primary">Register</a>
    </div>
</div>
<div class="container-fluid navigation">
    <div id="navbar" class="container collapse navbar-collapse">
        @include('theme.velms.partial.navigation')
    </div>
</div>
