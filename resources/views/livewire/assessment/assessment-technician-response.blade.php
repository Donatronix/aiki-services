 <section>
     @foreach ($errors->all() as $error)
     <div>
         <span class="red-text text-darken-2">{{ $error }}</span>
     </div>
     @endforeach
     <h3>{{ $assessment->question }}</h3>
     <div class="row">
         <div class="input-field col s12">
             @if($assessment->question_type==='text')
             <textarea wire:model.lazy="answers.0" id="{{ $assessment->slug.$loop->index }}" name="{{ $assessment->slug }}" class="materialize-textarea" required>{{ $response ?? ($answers[0] ?? null) }}</textarea>
             @elseif($assessment->question_type==='number')
             <input wire:model.lazy="answers.0" id="{{ $assessment->slug.$loop->index }}" name="{{ $assessment->slug }}" class="allowNumericWithDecimal" type="text" required value="{{ $response ?? ($answers[$assessment->slug.$loop->index] ?? null) }}">
             @elseif($assessment->question_type==='select')
             <ol>
                 @foreach($assessment->options as $item)
                 <li>
                     <label>
                         <input class="with-gap" name="{{ $assessment->slug }}" id="{{ $assessment->slug.$loop->index }}" wire:click="addResponse()" wire:model.lazy="answers.0" value="{{ $item->id }}" type="radio" @if(($response==$item->id) || (isset($answers[0]) && ($answers[0]==$item->id))) checked @else {{ null }} @endif required>
                         <span>{{ $item->option }}</span>
                     </label>
                 </li>
                 @endforeach
             </ol>
             @elseif($assessment->question_type==='multiple select')
             <ol>
                 @foreach($assessment->options as $item)
                 <li>
                     <label>
                         <input name="{{ $assessment->slug }}" id="{{ $assessment->slug.$loop->index }}" wire:model.lazy="answers.{{ $assessment->slug.$loop->index }}" value="{{ $item->id }}" type="checkbox" class="filled-in" @if(($response==$item->id) || (isset($answers[$assessment->slug.$loop->index]) && ($answers[$assessment->slug.$loop->index]==$item->id))) checked @else {{ null }} @endif required>
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
 </section>
