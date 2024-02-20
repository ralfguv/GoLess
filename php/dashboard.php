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
                        <span>Ultimas Vendas</span>

                        <table class="table table-borderless table_ultimas_vendas">
                            <tbody>
                                <tr>
                                    <td rowspan="4" class="ImagemEHeaderPedido" style="width: 40%; height: 100%;">
                                        <img width="100%" style="padding: 10px;" src="../imagens/Elementos_Gráficos/Hub/Dashboard/Kits/kit_3_bandanas_rosa_1.jpg">
                                    </td>
                                    <td class="ImagemEHeaderPedido" style="width: 5%;">
                                        <span class="codigoPedido">240215MBFQRP4E</span>
                                    </td>
                                    <td class="ImagemEHeaderPedido">
                                        <span class="statusPedido">(Pagamento Confirmado)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">Kit 3 Babador Bandana Algodão Bebê Dupla Face Menina Menino (Kit Menina)</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">2 x R$ 18,99</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 5%;"><img src="../imagens/Elementos_Gráficos/Hub/icones_mkt/shopee.png" alt="shopee">&nbsp;Shopee <i>(2 minutos atrás)</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-borderless table_ultimas_vendas">
                            <tbody>
                                <tr>
                                    <td rowspan="4" class="ImagemEHeaderPedido" style="width: 40%; height: 100%;">
                                        <img width="100%" style="padding: 10px;" src="../imagens/Elementos_Gráficos/Hub/Dashboard/Kits/kit_3_bandanas_rosa_1.jpg">
                                    </td>
                                    <td class="ImagemEHeaderPedido" style="width: 5%;">
                                        <span class="codigoPedido">240215MBFQRP4E</span>
                                    </td>
                                    <td class="ImagemEHeaderPedido">
                                        <span class="statusPedido">(Pagamento Confirmado)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">Kit 3 Babador Bandana Algodão Bebê Dupla Face Menina Menino (Kit Menina)</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">2 x R$ 18,99</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 5%;"><img src="../imagens/Elementos_Gráficos/Hub/icones_mkt/shopee.png" alt="shopee">&nbsp;Shopee <i>(2 minutos atrás)</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-borderless table_ultimas_vendas">
                            <tbody>
                                <tr>
                                    <td rowspan="4" class="ImagemEHeaderPedido" style="width: 40%; height: 100%;">
                                        <img width="100%" style="padding: 10px;" src="../imagens/Elementos_Gráficos/Hub/Dashboard/Kits/kit_3_bandanas_rosa_1.jpg">
                                    </td>
                                    <td class="ImagemEHeaderPedido" style="width: 5%;">
                                        <span class="codigoPedido">240215MBFQRP4E</span>
                                    </td>
                                    <td class="ImagemEHeaderPedido">
                                        <span class="statusPedido">(Pagamento Confirmado)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">Kit 3 Babador Bandana Algodão Bebê Dupla Face Menina Menino (Kit Menina)</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">2 x R$ 18,99</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 5%;"><img src="../imagens/Elementos_Gráficos/Hub/icones_mkt/shopee.png" alt="shopee">&nbsp;Shopee <i>(2 minutos atrás)</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-borderless table_ultimas_vendas">
                            <tbody>
                                <tr>
                                    <td rowspan="4" class="ImagemEHeaderPedido" style="width: 40%; height: 100%;">
                                        <img width="100%" style="padding: 10px;" src="../imagens/Elementos_Gráficos/Hub/Dashboard/Kits/kit_3_bandanas_rosa_1.jpg">
                                    </td>
                                    <td class="ImagemEHeaderPedido" style="width: 5%;">
                                        <span class="codigoPedido">240215MBFQRP4E</span>
                                    </td>
                                    <td class="ImagemEHeaderPedido">
                                        <span class="statusPedido">(Pagamento Confirmado)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">Kit 3 Babador Bandana Algodão Bebê Dupla Face Menina Menino (Kit Menina)</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 100%;">2 x R$ 18,99</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="dadosPedido" style="width: 5%;"><img src="../imagens/Elementos_Gráficos/Hub/icones_mkt/shopee.png" alt="shopee">&nbsp;Shopee <i>(2 minutos atrás)</td>
                                </tr>
                            </tbody>
                        </table>

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
                            <span>Expedição</span>
                        </div>

                        <div>
                            <canvas style="display: block;box-sizing: border-box;height: 384px; width: 100%;" id="chartexpedicao"></canvas>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                            const ctx = document.getElementById('chartexpedicao');

                            new Chart(ctx, {



                                type: 'bar',
                                data: {
                                    labels: ['Aberto', 'Faturado', 'Hoje', 'Conferir', 'Devolvido'],
                                    datasets: [{
                                        label: 'Status',
                                        data: [50, 5, 2, 150, 8],
                                    }]
                                },
                                options: {
                                    scales: {

                                        x: {
                                            grid: {
                                                drawOnChartArea: false,
                                                drawTicks: false,
                                            },
                                            ticks: {
                                                display: false,
                                            },
                                        },

                                        y: {
                                            grid: {
                                                drawOnChartArea: false,
                                            },
                                            beginAtZero: true,
                                        },


                                    },

                                    indexAxis: 'y',
                                    elements: {
                                        bar: {
                                            borderWidth: 1,
                                        }
                                    },
                                    responsive: false,
                                    plugins: {
                                        legend: {
                                            display: false,
                                            position: 'right',
                                        },
                                    }
                                }
                            });
                        </script>


                    </div>

                    <div class="metas grafico-estilo">
                        <div class="header_title_cards">
                            <span class="txt_alinhamento_left">Próximos Compromissos</span>
                            <button type="button" class="btn btn_plus" data-bs-toggle="modal" data-bs-target="#cad_compromisso"><i class="fa-solid fa-plus"></i></button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade " id="cad_compromisso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="../php/compromisso.php" method="post">
                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do seu compromisso" required>
                                                <label for="titulo">Título do seu compromisso</label>
                                            </div>
                                            <div class=" mb-3 row">
                                                <div class="col">
                                                    <input type="date" class="form-control" name="data" id="data" required>
                                                </div>
                                                <div class="col">
                                                    <input type="time" class="form-control" name="hora" id="hora" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descreva seu compromisso:" required></textarea>
                                                <label for="descricao">Descreva seu Compromisso:</label>
                                            </div>
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Desistir</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td rowspan="03" class="time">07:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    
                                    <?php
                                        $horatd = 07;

                                     include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<tr>";
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">08:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 8;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">09:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 9;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">10:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 10;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">11:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 11;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">12:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 12;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">13:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 13;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">14:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 14;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">15:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 15;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <td class="time">16:00</td>
                                    <!--colocar a quantidade de linhas para o time de 3 e colocar por td as infos junto com o botão de ação-->
                                    <?php
                                        $horatd = 16;
                                        include_once 'listar_compromisso.php';

                                        while ($dados_compromisso = mysqli_fetch_assoc($result_dados)) {
                                            echo "<td class='event'>" . $dados_compromisso['hora'] . " -- " . $dados_compromisso['titulo'] . "</td>";
                                            echo "<td class'icones-compromissos'>
                                                
                                                        <i class='fa-solid fa-pen-to-square'></i>

                                                        <a href='dashboard.php?id=$dados_compromisso[id]'>
                                                            <i class='fa-solid fa-check'></i>
                                                        </a>
                                                    </td>";
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
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
                                    <th scope="row">7</th>
                                    <td>Amazon</td>
                                    <td>10</td>
                                    <td>R$ 300,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="Geral grafico-estilo">

                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner size-image-propaganda">
                                <div class="carousel-item active">
                                    <img src="../imagens/Elementos_Gráficos/Hub/Dashboard/banner1.png" class="d-block w-100" alt="Propaganda">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imagens/Elementos_Gráficos/Hub/Dashboard/Banner2.jpg" class="d-block w-100" alt="Propaganda">
                                </div>
                                <div class="carousel-item">
                                    <img src="../imagens/Elementos_Gráficos/Hub/Dashboard/Banner3.png" class="d-block w-100" alt="Propaganda">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/dashboard.js"></script>





</body>

</html>