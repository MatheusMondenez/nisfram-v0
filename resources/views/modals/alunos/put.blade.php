@foreach($alunos as $aluno)

<div class="modal fade" id="modalAluno{{$aluno['ID_ALUNO_ALU']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Novo Aluno</h4>
            </div>
            <div class="modal-body">

            {!! Form::model($alunos, ['route' => ['alunos.update', $aluno['ID_ALUNO_ALU']], 'class' => 'form', 'method' => 'put']) !!}

                @include('forms.alunos.put')

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endforeach