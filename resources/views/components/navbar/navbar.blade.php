<nav class="navbar navbar-expand bg-primary border-bottom">
	<a class="link" style="border: 0; background: inherit;" data-toggle="collapse" data-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
		<i data-feather="menu" class="text-white"></i>
	</a>
	

	<div class="navbar-collapse collapse">
		<span class="text-white col-2 justify-align-center">
			
		</span>
	
	<ul class="navbar-nav navbar-align">
		<div class="btn-group dropstart">
			<a class="dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="align-middle me-1 text-light" data-feather="user"></i> 
				{{ Auth::user()->name }}
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Conta</a></li>
				<li><a class="dropdown-item" href="#">Informações</a></li>
				<a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();	document.getElementById('logout-form').submit();">
					<i data-feather="log-out"></i>
					{{ __('Sair') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</ul>
		</div>
	</ul>
</div>
</nav>