<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<!-- SIDEBAR -->
<div class="wrapper">
	<aside id="sidebar">
		<div class="h-100">
			<div class="sidebar-logo">
				<span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">SISPRO</span>
			</div>
			<!-- NAVEGAÇÃO DA SIDEBAR -->
			<ul class="sidebar-nav">
				<li class="sidebar-header">
					FERRAMENTAS
				</li>
				<li class="sidebar-item">
					<a href="#" class="sidebar-link">
						<i data-feather="list"></i>
						Profile
						<a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();	document.getElementById('logout-form').submit();">
							<i data-feather="log-out"></i>
							{{ __('Sair') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
						<i data-feather="file-text"></i>
						Páginas
					</a>
					<ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">Processo 1</a>
						</li>
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">Processo 2</a>
						</li>
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">Processo 3</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</aside>
	<div class="main">
		<nav class="navbar navbar-expand bg-primary border-bottom">
			<button class="btn" type="button" data-bs-theme="dark">
				<i data-feather="menu" class="text-white"></i>
		
			</button>
		</nav>
	</div>
	
</div>

<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

