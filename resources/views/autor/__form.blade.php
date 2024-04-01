<div>     
    <div class = 'mb-3'>
            <Label class='form-label' for="">Nome</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('nome') is-invalid @enderror"
                type="text"
                name="nome"
                id="nome"
                value="{{ $registro->nome ?? old('nome') }}">
                @error('nome')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class = 'mb-3'>
            <Label class='form-label' for="">Apelido</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('apelido') is-invalid @enderror"  
                type="text"
                name="apelido"
                id="apelido"
                value="{{ $registro->apelido ?? old('apelido') }}">
                @error('apelido')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>

                    </span>
                @enderror
        </div>
        <div class = 'mb-3'>
            <Label class='form-label' for="">Cidade</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('cidade') is-invalid @enderror"
                type="text"
                name="cidade"
                id="cidade"
                value="{{ $registro->cidade ?? old('cidade') }}">
                @error('cidade')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>

                    </span>
                @enderror
        </div>
        <div class = 'mb-3'>
            <Label class='form-label' for="">Bairro</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('bairro') is-invalid @enderror"
                type="text"
                name="bairro"
                id="bairro"
                value="{{ $registro->bairro ?? old('bairro') }}">
                @error('bairro')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>

                    </span>
                @enderror
        </div>
        <div class = 'mb-3'>
            <Label class='form-label' for="">CEP</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('cep') is-invalid @enderror"
                type="text"
                name="cep"
                id="cep"
                value="{{ $registro->cep ?? old('cep') }}">
                @error('cep')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>

                    </span>
                @enderror
        </div>
        <div class = 'mb-3'>
            <Label class='form-label' for="">E-mail</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('email') is-invalid @enderror"
                type="text"
                name="email"
                id="email"
                value="{{ $registro->email ?? old('email') }}">
                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>

                    </span>
                @enderror
        </div>
        <div class = 'mb-3'>
            <Label class='form-label' for="">Telefone</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input 
                class = "form-control @error('telefone') is-invalid @enderror"
                type="text"
                name="telefone"
                id="telefone"
                value="{{ $registro->telefone ?? old('telefone') }}">
                @error('telefone')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>

                    </span>
                @enderror
        </div>
</div>
