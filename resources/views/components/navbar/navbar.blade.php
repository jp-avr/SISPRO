@php use App\Http\Middleware\LoginGlobalMiddleware\AuthCustom; @endphp

{{-- @if (Auth::user() or AuthCustom::user()) --}}
<nav class="navbar navbar-expand bg-primary">
	<a style="border: 0; background: inherit;" data-toggle="collapse" data-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
		<i data-feather="menu" class="text-white"></i>
	</a>

	<div class="navbar-collapse collapse">
			<span class="text-white col-2 justify-align-center">
				@if(AuthCustom::authenticated())
					{{ AuthCustom::role()->role_descricao }}
				@endif
			</span>
		
		<ul class="navbar-nav navbar-align">
			
			<div class="dropleft">
					
				<a class="text-white" style="text-decoration: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="align-middle me-1 text-light" data-feather="user"></i> 
						{{ AuthCustom::pegarNomeLogado() }}
					<i class="align-middle me-1 text-light" data-feather="chevron-down"></i>
				</a>
				
				<li class="nav-item dropdown">
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ route('menu.conta') }}"><i class="align-middle me-1" data-feather="user"></i> Conta</a>
						{{-- <div class="dropdown-divider"></div> --}}
						{{-- <a class="dropdown-item" href="{{ route('menu.ajuda') }}"><i class="align-middle me-1" data-feather="help-circle"></i> Ajuda</a> --}}

						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('logout_geral') }}">Sair</a>
					</div>
				</li>
			</div>
		</ul>
	</div>
</nav>
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">

		<button type="button" id="sidebarCollapse" class="btn btn-primary">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle Menu</span>
		</button>

		<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="text-primary" style="text-decoration: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="align-middle me-1 text-primary" data-feather="user"></i> 
						{{ AuthCustom::pegarNomeLogado() }}
						<i class="align-middle me-1 text-primary" data-feather="chevron-down"></i>
					</a>
				</li>
				
			</ul>
		</div>
	</div>
</nav> --}}
{{-- @endif --}}