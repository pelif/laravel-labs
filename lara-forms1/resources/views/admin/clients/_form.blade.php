{{ csrf_field() }}    

<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $client->name) }}">
</div>
<div class="form-group">
    <label for="document_number">Documento</label>
    <input type="text" class="form-control" name="document_number" id="document_number" value="{{ old('document_number', $client->document_number) }}">
</div>
<div class="form-group">
    <label for="date_birth">Data Nasc.</label>
    <input type="date" class="form-control" name="date_birth" id="date_birth" value="{{ old('date_birth', $client->date_birth) }}">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $client->email) }}">
</div>
<div class="form-group">
    <label for="phone">Telefone</label>
    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $client->phone) }}">
</div>
<div class="form-group">
    <label for="marital_status">Estado Civil</label>        
    <select name="marital_status" id="marital_status" class="form-control" value="{{ $client->marital_status }}">
        <option>Selecione o Estado Civil</option>
        <option value="1" {{ old('marital_status', $client->marital_status) == 1 ? 'selected="selected"' : '' }}>Solteiro</option>
        <option value="2" {{ old('marital_status', $client->marital_status) == 2 ? 'selected="selected"' : '' }}>Casado</option>
        <option value="3" {{ old('marital_status', $client->marital_status) == 3 ? 'selected="selected"' : '' }}>Divorciado</option>
    </select>
</div>
<div class="form-group">
    <label for="sex">Sexo</label>
    
    <select name="sex" id="sex" class="form-control" value="{{ $client->sex }}">
        <option>Selecione o Sexo</option>
        <option value="F" {{ old('sex', in_array($client->sex, ['f','F'])) ? 'selected' : '' }}>F</option>
        <option value="M" {{ old('sex', in_array($client->sex, ['m','M'])) ? 'selected' : '' }}>M</option>
    </select>
</div>
<div class="form-group">
    <label for="physical_desability">Deficiência Física</label>
    <input type="checkbox" class="form-control" name="physical_desability" id="physical_desability" {{ old('physical_desability', $client->physical_desability) ? 'checked' : '' }}>
</div>

<div class="form-group">
    <label for="defaulter">Inadimplente ? </label>
    <input type="checkbox" class="form-control" name="defaulter" id="defaulter" {{ old('defaulter', $client->defaulter) ? 'checked' : '' }}>         
</div>