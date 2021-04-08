<div class="col s12">
    @include('errors.list')
    <div class="row">
        <ol style="list-style-type: upper-alpha;">
            @foreach($options as $item)
            <li>{{ $item->option }} <a class="waves-effect waves-light btn red" title="Delete" wire:click.prevent="removeOption('{{ $item->slug }}')"><i class="material-icons">close</i></a>
            </li>
            @endforeach
        </ol>
    </div>

    <form wire:submit.prevent="addOption" action="" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <textarea id="option" name="option" wire:model.lazy="option" class="materialize-textarea" required></textarea>
                <label for="option">Enter Option</label>
                @error('option')
                <span class="red-text text-darken-2">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                    Add Option
                </button>
            </div>
        </div>
    </form>
</div>
