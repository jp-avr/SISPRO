<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<aside id="sidebar">
			<div class="h-100">
				<div class="sidebar-logo">
					<span style="font-family: 'Poppins'; font-weight: 600; font-size: 28px;" class="text-primary">SISPRO</span>
				</div>
				<!-- NAVEGAÇÃO DA SIDEBAR -->
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						PROCESSOS
					</li>
					<li class="sidebar-item">
						<a href="#" class="sidebar-link">
							<i data-feather="chevron-right"></i>
							Administrativo
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
							<i data-feather="chevron-right"></i>
							Judiciário
						</a>
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
			<main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Teste</h3>
                    </div>
                </div>
            </main>
		</div>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>