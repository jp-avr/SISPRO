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
				{{-- LISTAGEM DE PROCESSOS --}}
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{route('processos.index')}}">
						<i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">Listar</span>
					</a>
				</li>
				{{-- PROCESSOS ADMINISTRATIVOS--}}
				<li class="sidebar-item">
					<a href="{{ route('processo_administrativo.inserir') }}" class="sidebar-link">
						<i data-feather="chevron-right"></i>
						Administrativo
					</a>
				</li>
				
				{{-- PROCESSOS JUDICIARIOS--}}
				<li class="sidebar-item">
					<a href="{{ route('processo_judiciario.inserir') }}" class="sidebar-link">
						<i data-feather="chevron-right"></i>
						Judiciário
					</a>
				</li>

				{{-- <a href="{{ route('processo.inserir') }}" class="sidebar-link">
					<i data-feather="chevron-right"></i>
					Novo Processo
				</a> --}}
				{{-- CLIENTES--}}
				<li class="sidebar-header">
					CLIENTES
				</li>
				<li class="sidebar-item">
					<a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#cliente" aria-expanded="false" aria-controls="cliente">
						<i data-feather="chevron-right"></i>
						Cliente
					</a>
					<ul id="cliente" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
						<li class="sidebar-item">
							<a href="{{ route('clientes') }}" class="sidebar-link">
								<i data-feather="user-check"></i>
								Listar Clientes
							</a>
						</li>
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">
								<i data-feather="user-plus"></i>
								Cadastrar Cliente
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</aside>