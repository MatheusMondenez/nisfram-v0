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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAluno"><i class="fa fa-plus"></i> Novo Aluno</button>
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
    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            
            <div class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-print"></i> Relatórios <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Todos Alunos</a></li>
                    <li><a href="#">Alunos por Turma</a></li>
                    <li><a href="#">Alunos Ativos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            
            <div class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-file-excel-o"></i> Planilhas <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Todos Alunos</a></li>
                    <li><a href="#">Alunos por Turma</a></li>
                    <li><a href="#">Alunos Ativos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    <!-- /.row  -->
    
    <!-- Modal -->
    <div class="modal fade" id="modalAluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Novo Aluno</h4>
                </div>
                <div class="modal-body">

                {!! Form::open(['route' => 'alunos.store', 'class' => 'form']) !!}
                    
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="nome" class="control-label">Nome:</label>
                            {!! Form::text('ST_NOME_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="responsavel" class="control-label">Responsável:</label>
                            {!! Form::text('ST_RESPONSAVEL_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="data-nasc" class="control-label">NIS:</label>
                            {!! Form::text('NM_NIS_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="data-nasc" class="control-label">Data de Nascimento:</label>
                            {!! Form::date('DT_NASCIMENTO_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-4">
                          <label for="status" class="control-label">Sexo:</label>
                          
                        </div>
                    </div>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="endereco" class="control-label">Endereço:</label>
                            {!! Form::text('ST_ENDERECO_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="numero" class="control-label">Número:</label>
                            {!! Form::text('NM_ENDERECO_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-5">
                            <label for="bairro" class="control-label">Bairro:</label>
                            {!! Form::text('ST_BAIRRO_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tel" class="control-label">Telefone:</label>
                            {!! Form::text('NM_TELEFONE_ALU', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <hr>
                    
                    <div class="row">
                        <div class="form-group col-md-4">
                              <label for="status" class="control-label">Status:</label>
                              {!! Form::select('FL_IMAGEM_ALU', ['1' => 'Sim', '0' => 'Não'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-4">
                              <label for="imagem" class="control-label">Direitos de Imagem:</label>
                              {!! Form::select('FL_IMAGEM_ALU', ['1' => 'Sim', '0' => 'Não'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-md-4">
                              <label for="saida" class="control-label">Autorização de Saída:</label>
                              {!! Form::select('FL_SAIDA_ALU', ['1' => 'Sim', '0' => 'Não'], null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection