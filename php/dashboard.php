<?php

if (!empty($_GET['id'])) {
    include_once 'config.php';

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM lembretes WHERE id=$id";

    $result = $conn->query($sqlselect);

    if ($result->num_rows > 0) {
        $sqldelete = "DELETE FROM lembretes WHERE id=$id";
        $resultdelete = $conn->query($sqldelete);
    }


    header('location: dashboard.php#tabela-notas');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hub_all.css">
    <link rel="shortcut icon" href="./imagens/Logos_Goless/GoLess ICON.png" />
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard-GoLess</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <img src="../imagens/Logos_Goless/GoLess_ICON.png" alt="">
                </button>
                <div class="sidebar-logo">
                    <a href="#">GoLess</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#vendas" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Vendas</span>
                    </a>
                    <ul id="vendas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Pedidos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Expedição</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Envios</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-file-circle-plus"></i>
                        <span>Catálogo</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Produtos</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Anúncios ML</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Anúncios Skyhub</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Atributos</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-brands fa-slack"></i>
                        <span>Integrações</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>Insigths</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#relatorios" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-file-circle-plus"></i>
                        <span>Relatórios</span>
                    </a>
                    <ul id="relatorios" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Lucratividade</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Notas Fiscais</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Anúncios</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#configuracoes" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-gear"></i>
                        <span>Configurações</span>
                    </a>
                    <ul id="configuracoes" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fa-solid fa-caret-right"></i>
                                Geral
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Usuários</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Nota Fiscal</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Transportadora</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><i class="fa-solid fa-caret-right"></i>Templates</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="./login.html" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <main>
            <div class="main-content">
                <div class="header-login">
                </div>
                <div class="performace-main">
                    <div class="nunbers_monther">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>2370</span>
                        <span>Vendas</span>
                    </div>
                    <div class="nunbers_monther">
                        <i class="fa-solid fa-bullseye"></i>
                        <span>R$ 150.203,98</span>
                        <span>Total Vendido</span>
                    </div>
                    <div class="nunbers_monther">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>R$ 64,23</span>
                        <span>Ticket Médio</span>
                    </div>
                    <div class="nunbers_monther">
                        <i class="fa-solid fa-users"></i>
                        <span>54</span>
                        <span>Pedidos Hoje</span>
                    </div>
                    <div class="nunbers_monther">
                        <i class="fa-solid fa-sack-dollar"></i>
                        <span>R$ 3.486,42</span>
                        <span>Vendido Hoje</span>
                    </div>
                    <div class="nunbers_monther">
                        <i class="fa-solid fa-puzzle-piece"></i>
                        <span>111</span>
                        <span>Problemas</span>
                    </div>
                </div>
                <div class="graficos">
                    <div class="grafico-vendas grafico-estilo">
                        <span>Vendas últimos 30 dias</span>
                        <div>
                            <canvas id="myChart"></canvas>

                            <script>
                                const data = {
                                    labels: ['Canal A', 'Canal B', 'Canal C', 'Canal D', 'Canal E'],
                                    datasets: [{
                                        data: [30, 20, 25, 15, 10],
                                        backgroundColor: [
                                            '#ff6384',
                                            '#36a2eb',
                                            '#cc65fe',
                                            '#ffce56',
                                            '#4bc0c0'
                                        ]
                                    }]
                                };

                                const config = {
                                    type: 'pie',
                                    data: data,
                                    options: {
                                        plugins: {
                                            legend: {
                                                position: 'right'
                                            }
                                        }
                                    }
                                };

                                var myChart = new Chart(
                                    document.getElementById('myChart'),
                                    config
                                );
                            </script>
                        </div>
                    </div>


                    <div class="ultimas_vendas grafico-estilo">
                        <p>Ultimas Vendas</p>
                    </div>

                    <div class="notas grafico-estilo" id="tabela-notas">
                        <div class="header_cards_notas">
                            <span>Adicione seu Lembrete</span>
                            <div class="form-notas">
                                <form action="../php/addlembrete.php" method="post">
                                    <input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="" placeholder="Digite o que deseja lembrar..." required>
                                    <button type="submit" class="btn btn_plus"><i class="fa-solid fa-plus"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="tabela-notas">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="col-id" scope="col">#</th>
                                        <th class="col-lembrete" scope="col">Lembrete</th>
                                        <th class="col-acoes" scope="col">...</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once 'listar_lembrete.php';

                                    while ($dados_tabela = mysqli_fetch_assoc($result_dados)) {
                                        echo "<tr>";
                                        echo "<td>" . $dados_tabela['id'] . "</td>";
                                        echo "<td>" . $dados_tabela['lembrete'] . "</td>";
                                        echo "<td>
                                                    <a class='btn btn-sm btn-outline-success' href='dashboard.php?id=$dados_tabela[id]'>
                                                        <i class='fa-solid fa-check'></i>
                                                    </a>
                                                  </td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="extra grafico-estilo">
                        <div class="header_cards">
                            <span>Extra</span>
                            <a href=#tabela-notas><i class="fa-solid fa-plus"></i>Extra</a>
                        </div>
                    </div>

                    <div class="metas grafico-estilo">
                        <div class="header_title_cards">
                            <span>Próximos Compromissos</span>
                        </div>
                        <div class="header_cards">
                            <span>Metas</span>
                            <a href="#"><i class="fa-solid fa-plus"></i>Metas</a>
                        </div>
                    </div>

                    <div class="vendas-semanais grafico-estilo">

                        <canvas id="myChart1"></canvas>

                        <script>
                            const data1 = {
                                labels: ['12/Fev', '13/Fev', '14/Fev', '15/Fev', '16/Fev'],
                                datasets: [{
                                    data: [320, 150, 120, 100, 100],
                                }]
                            };

                            const config1 = {
                                type: 'line',
                                data: data1,
                                options: {
                                    plugins: {
                                        legend: {
                                            label: 'Vendas Semanais',
                                            position: 'top'
                                        }
                                    }
                                }
                            };

                            var myChart = new Chart(
                                document.getElementById('myChart1'),
                                config1
                            );
                        </script>
                    </div>

                    <div class="vendas-markteplace grafico-estilo">
                        <span>Vendas Markteplace</span>
                        <span class="destaque">Hoje</span>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Markteplace</th>
                                    <th scope="col">Nº Vendas</th>
                                    <th scope="col">R$ Vendas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mercado Livre</td>
                                    <td>15</td>
                                    <td>R$ 1.500,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Magalu</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Shopee</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Americanas</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Olist</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Dafit</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Amazon</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="Geral grafico-estilo">
                        <p>Noticias GoLess</p>
                    </div>
                </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/dashboard.js"></script>





</body>

</html>