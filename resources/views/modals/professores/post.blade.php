<div class="modal fade" id="modalProfessor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Novo Professor</h4>
            </div>
            <div class="modal-body">

            {!! Form::open(['route' => 'professores.store', 'class' => 'form', 'id' => 'formSalvarProfessor']) !!}

                @include('forms.professores.post')

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'btnSalvarProfessor']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>