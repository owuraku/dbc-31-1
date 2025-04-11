 <div class="mb-3">
     {{-- isset($type) ? $type : 'text' --}}
     <label for="name" class="form-label">{{ $label }}</label>
     <input type="{{ $type ?? 'text' }}" name="{{ $name }}"
         class="form-control  @error($name) is-invalid @enderror" id="{{ $name }}"
         placeholder="Enter {{ $label }}" value="{{ old($name) }}">
     @error($name)
         <div id="invalidNameFeedback" class="invalid-feedback">
             {{ $message }}
         </div>
     @enderror
 </div>
