@extends('templates.admin')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Alunos
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / <i class="fa fa-user fa-fw"></i> Alunos
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-lg-8">
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Aluno</button>
        </div>
        <div class="col-lg-4">
            <form action="" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="pesquisar" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="submit" title="Pesquisar"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <br />
    <!-- /.row -->
    
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                                0
                            </div>
                            <div>Alunos Cadastrados</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalhes</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-minus-circle fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                                0
                            </div>
                            <div>Alunos sem Turma</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Ver detalhes</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        {{--<div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-pie-chart fa-fw"></i> Ativos e Inativos</h3>
                </div>
                    <div class="panel-body">
                        <div id="donutStatusAlunos" style="height: 200px;"></div>
                    </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-pie-chart fa-fw"></i> Meninos e Meninas</h3>
                </div>
                    <div class="panel-body">
                        <div id="donutSexo" style="height: 200px;"></div>
                    </div>
            </div>
        </div>--}}

    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            
            @if(count($alunos) > 0)
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nome</th>
                            <th class='text-right'>Idade</th>
                            <th class='text-center'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno['NM_NIS_ALU']}}</td>
                                <td>{{$aluno['ST_NOME_ALU']}}</td>
                                <td>Teste</td>
                                <td>Ações</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhum aluno cadastrado</div>
            @endif
            
        </div>
    </div>
    <!-- /.row  -->

@endsection