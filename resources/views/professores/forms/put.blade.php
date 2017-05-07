@foreach($professores as $professor)

<div class="modal fade" id="modalProfessor{{$professor['ID_PROFESSOR_PRO']}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><spam aria-hidden="true">&times;</spam></button>
                <h4 class="modal-title">Cadastro de Professor</h4>
            </div>
            <div class="modal-body">
                {!! Form::model($professores, ['route' => ['professores.update', $professor['ID_PROFESSOR_PRO']], 'class' => 'form', 'method' => 'put']) !!}
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome:</label>
                        {!! Form::text('ST_NOME_PRO', $professor['ST_NOME_PRO'], ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
            </form>
        </div>
    </div>
</div>

@endforeach()