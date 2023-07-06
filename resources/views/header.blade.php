<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-default" role="navigation" style="background-color: lightseagreen">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Shopping cart</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active" ><a href="#" style="background-color: lightseagreen;">Home</a></li>
                <li><a href="/myorders">Orders</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">Card({{$total}})</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout" style="color: red;">Logout</a></li>
                    </ul>
                </li>
                @else
                    <li><a href="login" style="color: green;">login</a></li>
                    <li><a href="register" style="color: blue;">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
