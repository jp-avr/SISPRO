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
					<a href="{{ route('processos') }}" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#processos" aria-expanded="false" aria-controls="processos">
						<i data-feather="chevron-right"></i>
						Listar
					</a>
				</li>
				<li class="sidebar-item">
					<a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#administrativo" aria-expanded="false" aria-controls="administrativo">
						<i data-feather="chevron-right"></i>
						Administrativo
					</a>
					<ul id="administrativo" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">
								<i data-feather="file-text"></i>
								Listar Processos
							</a>
						</li>
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">
								<i data-feather="file-plus"></i>
								Novo Processo
							</a>
						</li>
					</ul>
				</li>
				
				{{-- JUDICIARIO --}}
				<li class="sidebar-item">
					<a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#judiciario" aria-expanded="false" aria-controls="judiciario">
						<i data-feather="chevron-right"></i>
						Judiciário
					</a>
					<ul id="judiciario" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">
								<i data-feather="file-text"></i>
								Listar Processos
							</a>
						</li>
						<li class="sidebar-item">
							<a href="#" class="sidebar-link">
								<i data-feather="file-plus"></i>
								Novo Processo
							</a>
						</li>
					</ul>
				</li>
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
							<a href="" class="sidebar-link">
								<i data-feather="user-plus"></i>
								Cadastrar Cliente
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</aside>