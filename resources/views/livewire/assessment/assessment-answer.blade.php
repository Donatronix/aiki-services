<div class="col s12">
    @include('errors.list')
    <form wire:submit.prevent="addAnswer" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                @if($assessmentType==='text')
                <textarea wire:model.lazy="answers.0" id="message5" name="answer" class="materialize-textarea" required>{{ old('answer') }}</textarea>
                @elseif($assessmentType==='number')
                <input wire:model.lazy="answers.0" id="message5" name="answer" class="allowNumericWithDecimal" type="text" required value="{{ old('answer') }}">
                @elseif($assessmentType==='select')
                <ol id="message5" style="list-style-type: upper-alpha;">
                    @foreach($options as $item)
                    <li>
                        <label>
                            <input class="with-gap" name="group3" wire:model.lazy="answers.{{ $loop->index }}" value="{{ $item->id }}" type="radio" required>
                            <span>{{ $item->option }}</span>
                        </label>
                    </li>
                    @endforeach
                </ol>
                @elseif($assessmentType==='multiple select')
                <ol id="message5" style="list-style-type: upper-alpha;">
                    @foreach($options as $item)
                    <li>
                        <label>
                            <input name="group3" wire:model.lazy="answers.{{ $loop->index }}" value="{{ $item->id }}" type="checkbox" class="filled-in" required>
                            <span>{{ $item->option }}</span>
                        </label>
                    </li>
                    @endforeach
                </ol>
                @endif
                @error('answers')
                <span class="red-text text-darken-2">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                    Add Answer
                </button>
            </div>
        </div>
    </form>
</div>