@extends('layouts.app')

@section('content')
    <div class="cont">
        <!-- começo do aside -->
        <aside>
            {{-- <div class="topo">
                <div class="logo">
                    <h2>C<span class="danger">BABA</span></h2>
                </div>
                <div class="fechar">
                    <span><i data-feather="x"></i></span>
                </div>
            </div> --}}
        </aside>
        <!-- fim do aside -->

        <!-- seção main -->
        <main class="dashboard">
            <h1 class="dashboardh1">Dashboard</h1>
            <div class="datar">
                <input type="date">
            </div>

            <div class="insight">

                <!-- COMEÇO DE VENDAS -->
                <div class="vendas">
                    <span class="material-symbols-outlined">trending_up</span>
                    <div class="meio">
                        <div class="esquerda">
                            <h3 class="dashboardh1">Vendas Totais</h3>
                            <h1 class="dashboardh1">$25.0</h1>
                        </div>
                        <div class="progresso">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="numero">80%</div>
                        </div>
                    </div>
                    <small class="dashboardh1">últimas 24h</small>
                </div>
                <!-- FINAL DE VENDAS -->

                <!-- COMEÇO DE CUSTOS -->
                <div class="custos">
                    <span class="material-symbols-outlined">shopping_bag</span>
                    <div class="meio">
                        <div class="esquerda">
                            <h3 class="dashboardh1">Despesas</h3>
                            <h1 class="dashboardh1">$25.0</h1>
                        </div>
                        <div class="progresso">
                            <svg class="teste">
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="numero">80%</div>
                        </div>
                    </div>
                    <small class="dashboardh1">últimas 24h</small>
                </div>
                <!-- FINAL DE CUSTOS -->

                <!-- COMEÇO DE RECEBIDO -->
                <div class="recebido">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="meio">
                        <div class="esquerda">
                            <h3 class="dashboardh1">Recebido</h3>
                            <h1 class="dashboardh1">$25.0</h1>
                        </div>
                        <div class="progresso">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="numero">100%</div>
                        </div>
                    </div>
                    <small class="dashboardh1">últimas 24h</small>
                </div>
                <!-- FINAL DE RECEBIDO -->
            </div>
            <!-- FINAL DE INSIGHTS -->
            <!-- COMEÇO DE PEDIDOS RECENTES -->
            <div class="pedidos_recentes">
                <h1 class="dashboardh1">Processos Recentes</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nome do Cliente</th>
                            <th>Número do Processo</th>
                            <th>Data</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>João</td>
                            <td>123</td>
                            <td>Hoje</td>
                            <td class="warning">Pendente</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>Victor</td>
                            <td>456</td>
                            <td>Hoje</td>
                            <td class="warning">Pendente</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>Sebastião</td>
                            <td>789</td>
                            <td>Hoje</td>
                            <td class="warning">Pendente</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>Ana Julia</td>
                            <td>1234</td>
                            <td>Hoje</td>
                            <td class="warning">Pendente</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- FINAL DE PEDIDOS RECENTES -->


        </main>
        <!-- fim da seção main -->

        <!-- COMEÇO DO LADO DIREITO -->
        <div class="direito">
            <!-- COMEÇO DA CLASSE TOPO -->
            <div class="topo">
                <button id="menu_bar">
                    <span class="material-symbols-outlined">menu</span>
                </button>

                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p><b>Dev</b></p>
                        <p>Admin</p>
                        <small class="text-muted"></small>
                    </div>
                    <div class="foto">
                        <img src="/img/foto.webp" alt="">
                    </div>
                </div>
            </div>
            <!-- FIM DA CLASSE TOPO -->

            <!-- COMEÇO DE UPDATES RECENTES -->
            <div class="updates_recentes">
                <h2 class="dashboardh1">Updates Recentes</h2>
                <div class="updates">
                <div class="update">
                    <div class="foto">
                        <img src="/img/foto.webp" alt="">
                    </div>
                    <div class="mensagem">
                        <p><b>João</b> Recebeu seu pedido</p>
                    </div>
                </div>
                <div class="update">
                    <div class="foto">
                        <img src="/img/foto.webp" alt="">
                    </div>
                    <div class="mensagem">
                        <p><b>João</b> Recebeu seu pedido</p>
                    </div>
                </div>
                <div class="update">
                    <div class="foto">
                        <img src="/img/foto.webp" alt="">
                    </div>
                    <div class="mensagem">
                        <p><b>João</b> Recebeu seu pedido</p>
                    </div>
                </div>
            </div>
            </div>
            <!-- FIM DE UPDATES RECENTES -->
            <!-- COMEÇO DE ANÁLISE -->
            <div class="analise">
                <h2 class="dashboardh1">Análise</h2>
                <div class="item online">
                    <div class="icone">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="lado_direito">
                        <div class="info">
                            <h3 class="dashboardh1">Online orders</h3>
                            <small class="text-muted">Visto por último a 2h</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3 class="dashboardh1">3849</h3>
                    </div>
                </div>

                <div class="item online">
                    <div class="icone">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="lado_direito">
                        <div class="info">
                            <h3 class="dashboardh1">Online orders</h3>
                            <small class="text-muted">Visto por último a 2h</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3 class="dashboardh1">3849</h3>
                    </div>
                </div>

                <div class="item online">
                    <div class="icone">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="lado_direito">
                        <div class="info">
                            <h3 class="dashboardh1">Online orders</h3>
                            <small class="text-muted">Visto por último a 2h</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3 class="dashboardh1">3849</h3>
                    </div>
                </div>
            </div>

            <!-- FIM DE ANÁLISE -->
            <div class="item add_processo">
                <div>
                    <span class="material-symbols-outlined">add</span>
                </div>
            </div>
        </div>
        <!-- fim da seção direita -->
    </div>
@endsection
