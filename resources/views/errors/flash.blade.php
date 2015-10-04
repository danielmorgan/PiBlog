<div class="errors">
    @if($errors->any())
        @foreach($errors->getMessages() as $error)
            <div class="error">
                {{ $error[0] }}
            </div>
        @endforeach
    @endif
</div>