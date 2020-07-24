<!DOCTYPE html>
<html>
	<?php include('components/head.inic.php');?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    <?php include('components/header.inic.php');?>
  <div class="content-wrapper">
    <div class="container">
      
      <?php include('components/message.inic.php');?>
    <!-- Content Header (Page header) -->
    <section class="content-header padding">
      <h1>
        Painel geral
        <small>Dados WebService</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

       <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box navbar">
              <div class="inner">
                <h3><?=$countUsuarios?></h3>
                <p>Usuários</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="/usuarios" class="small-box-footer">Cadastrado no app</a>
            </div>
          </div>
        <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box navbar">
              <div class="inner">
                <h3><?=$countCategorias?></h3>
                <p>Categorias</p>
              </div>
              <div class="icon">
                <i class="fa fa-square-o"></i>
              </div>
              <a href="/categorias" class="small-box-footer">Cadastrado no app</a>
            </div>
          </div>
        <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box navbar">
              <div class="inner">
                <h3><?=$countPublicidades ?></h3>
                <p>Publicidades</p>
              </div>
              <div class="icon">
                <i class="fa fa-picture-o"></i>
              </div>
              <a href="/publicidades" class="small-box-footer">Cadastrado no app</a>
            </div>
          </div>
        <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box navbar">
              <div class="inner">
                <h3><?=$countSimbolos?></h3>
                <p>Simbolos</p>
              </div>
              <div class="icon">
                <i class="fa fa-wrench"></i>
              </div>
              <a href="/simbolos" class="small-box-footer">Cadastrado no app</a>
            </div>
          </div>
        <!-- ./col -->
      </div>
      
      <div class="row">
        <div class="col-lg-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Usuários cadastrados</h3>
            </div>
          <!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="usuarios" class="table  table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Empresa</th>
                        <th class="text-center">CPF</th>
                        <th class="text-center">Nome Completo</th>
                        <th class="text-center">Marca Veiculo</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Telefone</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($usuarios as $value): ?>
                         <tr class="text-center">
                            <td><?=$value['id']?></td>
                            <td><?=$value['empresa']?></td>
                            <td><?=$value['cpf']?></td>
                            <td><?=$value['nomeCompleto']?></td>
                            <td><?=$value['marcaVeiculo']?></td>
                            <td><?=$value['email']?></td>
                            <td><?=$value['telefone']?></td>
                        </tr>
                       <?php endforeach?>
                    </tbody>
                </table>
              </div>
          </div>
        </div>
        <div class="col-lg-4">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Publicidades</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <?php foreach ($publicidades as $value): ?>
                     <li>
                        <img src="<?=$value['imagem']?>" alt="<?=$value['cliente']?>">
                        <a class="users-list-name" href="/publicidades/visualizar/<?=$value['id']?>"><?=$value['cliente']?></a>
                        <span class="users-list-date">Tempo: <?=$value['duracao']?></span>
                      </li>
                   <?php endforeach?>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="/publicidades" class="uppercase">Mais</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
    <!-- /.content -->
  </div>
</div>
<?php include('components/script.inic.php');?>
</body>
</html>