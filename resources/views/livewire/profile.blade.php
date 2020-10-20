<div class="card">
    <div class="card-header">
        {{ trans('global.my_profile') }}
    </div>

    <div class="card-body">
        <form wire:submit.prevent="updateprofile">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input wire:model="user.name" class="form-control {{ $errors->has('user.name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" required>
                @if($errors->has('user.name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user.name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.user.fields.email') }}</label>
                <input wire:model="user.email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
            @if ($success)
                <div class="alert alert-success mt-2">{{ trans('admin.profile.content.successfully_saved') }}</div>
            @endif
        </form>

        <button type="button" wire:click="$toggle('showHelp')">{{ trans('admin.profile.content.show_hide_help_section') }}</button>
        @if ($showHelp)
        <div class="alert alert-info">
            {{ trans('admin.profile.content.information') }}
        </div>
        @endif
    </div>
</div>
