@foreach($professores as $professor)

<div class="modal fade" id="modalProfessor{{$professor['ID_PROFESSOR_PRO']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Professor</h4>
            </div>
            <div class="modal-body">

            {!! Form::model($professores, ['route' => ['professores.update', $professor['ID_PROFESSOR_PRO']], 'class' => 'form', 'method' => 'put']) !!}

                @include('forms.professores.put')

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'id' => 'btnEditarProfessor']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endforeach()