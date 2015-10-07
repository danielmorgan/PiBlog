<div id="messages">
    @if ($errors->any())
        @foreach ($errors->getMessages() as $error)
            <div class="error">
                {{ $error[0] }}
            </div>
        @endforeach
    @endif

    @if (session('notice'))
        <div class="notice">
            {{ session('notice') }}
        </div>
    @endif
</div>