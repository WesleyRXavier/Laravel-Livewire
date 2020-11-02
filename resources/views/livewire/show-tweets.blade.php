<div>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" id="msg" name="msg" wire:model="msg">
        <input type="submit" value="{{ $btn }}">
    </form>
    <hr>
    @foreach ($tweets as $tweet)
        {{ $tweet->user->name  }} - {{ $tweet->content }} <br>

    @endforeach
</div>
