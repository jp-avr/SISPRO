<div class="collapse width hidden" id="collapseWidthExample" data-toggle="true">
    <nav class="sidebar">
        <div class="sidebar-content">
            <ul class="sidebar-nav">

                {{-- @foreach (auth()->user()->role->modules as $modulo)

                    <li class="sidebar-header">
                        {{$modulo->name}}
                </li>

                @foreach ($modulo->permissoes->where('is_menu',1) as $permissao)
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route($permissao->resource)}}">
                        <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">{{$permissao->descricao}}</span>
                    </a>
                </li>
                @endforeach
                @endforeach --}}

                <li class="sidebar-header">
                    <a>
                        <div class="d-flex align-content-center gap-3 mt-1">
                            <img src="{{url('img/CASPD.svg')}}" style="height: 2rem;" alt="">
                            <span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">CASPD</span>
                        </div>
                    </a>
                </li>

                <div>
                    <li class="sidebar-header">
                        SOLICITAÇÕES
                    </li>
                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">Pedidos</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">Laudo</span>
                        </a>
                    </li>
                </div>

            </ul>

        </div>
    </nav>
</div>
{{-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<nav id="sidebar" class="active bg-white">
    <h1><a href="index.html" class="logo">M.</a></h1>
    <ul class="list-unstyled components mb-5">
        <li class="active">
            <a href="#"><span class="fa fa-home"></span> Home</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-user"></span> About</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-cogs"></span> Services</a>
        </li>
        <li>
            <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
        </li>
    </ul>

    <div class="footer">
        <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
        </p>
    </div>
</nav>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sidebar.js"></script> --}}
