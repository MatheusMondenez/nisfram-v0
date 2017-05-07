@extends('templates.admin')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Professores
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / <i class="fa fa-graduation-cap fa-fw"></i> Professores
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-lg-8">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalProfessor"><i class="fa fa-plus"></i> Novo Professor</button>
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
        <div class="col-lg-8 col-md-8">
            
            @if(count($professores) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($professores as $professor)
                            <tr>
                                <td>{{$professor['ST_NOME_PRO']}}</td>
                                <td class="text-center">
                                    {!! Form::open(['route' => ['professores.destroy', $professor['ID_PROFESSOR_PRO']], 'method' => 'delete', 'class' => 'form']) !!}
                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalProfessor{{$professor['ID_PROFESSOR_PRO']}}">Editar</button>
                                        {!! Form::submit('Excluir', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-warning" role="alert"><i class="fa fa-frown-o"></i> Nenhum professor cadastrado</div>
            @endif
            
        </div>
        
        <div class="col-lg-4">
            
            <section>
              <div class="alert alert-info">
                <strong><i class="fa fa-warning"></i> Info!</strong> Cadastre os professores para poder criar as turmas. Para excluir um professor ele não pode estar vinculado à nenhuma turma.
              </div>
            </section>

            <section>
                <div class="panel panel-danger">
                  <div class="panel-heading">
                      <h3 class="panel-title"><i class="fa fa-graduation-cap fa-fw"></i> Professores sem Turma</h3>
                  </div>
                  <div class="panel-body">
                    Teste
                  </div>
                </div>
            </section>
            
        </div> 
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-21">
            {!! $professores->links() !!}
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            
            <div class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-print"></i> Relatórios <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Todos Professores</a></li>
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
                    <li><a href="#">Todos Professores</a></li>
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
    @include('professores.forms.post')
    @include('professores.forms.put')
    

@endsection