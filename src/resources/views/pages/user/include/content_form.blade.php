@csrf
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <x-input-sb
            id="name"
            name="name"
            value="{{old('name', $data ? $data->name :'')}}"
            :placeholder="'Informe o seu nome'"
            :label="'Nome'"
            :required="true"

        />
    </div>
    <div class="col-sm-6">
        <x-input-sb
            id="email"
            name="email"
            :placeholder="'Informe seu email'"
            :label="'Email'"
            :required="true"
            value="{{old('email', $data ? $data->email :'')}}"
        />
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <x-input-sb
            id="password"
            name="password"
            value="{{old('password')}}"
            :placeholder="'Senha'"
            :label="'Senha'"
            :required="$data ? false : true"
            :type="'password'"
            autocomplete="new-password"
        />
    </div>
    <div class="col-sm-6">
        <x-input-sb
            id="password_confirmation"
            name="password_confirmation"
            :placeholder="'Confirme sua Senha'"
            :label="'Confirmar Senha'"
            :required="$data ? false : true"
            :type="'password'"
        />
    </div>
</div>

<!-- Buttons -->
<div class="card-footer">
    <div class="row">
        <div class="col-sm-6">
            <x-button-sb
                type="submit"
                :class="'btn-success'"
                :icon="'fas fa-lg fa-save fa-sm text-white-50'"
                :label="'Salvar'"
            />

            <x-button-link-sb
                href="{{ route('table.index') }}"
                :class="'btn-danger'"
                :icon="'fas fa-window-close fa-sm text-white-50'"
                :label="'Cancelar'"
            />
        </div>
        <div class="col-sm-6 text-right">
            <label class="info-field-requeried mr-2">* Campos obrigatórios</label>
        </div>
    </div>
</div>
