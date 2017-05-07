<!-- Modal de Cadastro -->
<div class="modal fade" id="modalProfessor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><spam aria-hidden="true">&times;</spam></button>
                <h4 class="modal-title">Cadastro de Professor</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'professores.store', 'class' => 'form']) !!}
                    <div class="form-group">
                        <label for="nome" class="control-label">Nome:</label>
                        {!! Form::text('ST_NOME_PRO', null, ['class' => 'form-control']) !!}
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