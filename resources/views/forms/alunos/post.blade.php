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
        {!! Form::text('DT_NASCIMENTO_ALU', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-4">
        <label for="status" class="control-label">Sexo:</label>
        <br>
        {!! Form::radio('FL_SEXO_ALU', '0') !!} M
        {!! Form::radio('FL_SEXO_ALU', '1') !!} F
    </div>
</div>

<hr>

<div class="row">
    <div class="form-group col-md-3">
        <label for="endereco" class="control-label">CEP:</label>
        {!! Form::text('NM_CEP_ALU', null, ['class' => 'form-control cep', 'id' => 'campoCep']) !!}
    </div>
    <div class="form-group col-md-9">
        <label for="endereco" class="control-label">Endereço:</label>
        {!! Form::text('ST_ENDERECO_ALU', null, ['class' => 'form-control', 'id' => 'campoEndereco']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-3">
        <label for="numero" class="control-label">Número:</label>
        {!! Form::text('NM_ENDERECO_ALU', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-5">
        <label for="bairro" class="control-label">Bairro:</label>
        {!! Form::text('ST_BAIRRO_ALU', null, ['class' => 'form-control', 'id' => 'campoBairro']) !!}
    </div>
    <div class="form-group col-md-4">
        <label for="tel" class="control-label">Telefone:</label>
        {!! Form::text('NM_TELEFONE_ALU', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="numero" class="control-label">Cidade:</label>
        {!! Form::text('ST_CIDADE_ALU', null, ['class' => 'form-control', 'id' => 'campoCidade']) !!}
    </div>
    <div class="form-group col-md-4">
        <label for="numero" class="control-label">Estado:</label>
        {!! Form::text('ST_UF_ALU', null, ['class' => 'form-control', 'id' => 'campoEstado']) !!}
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