<!-- resources/views/redeem/form.blade.php -->
<h1>Redeem Tree</h1>
<p>Hi {{ $topPlayer->name }}, please select a tree to redeem:</p>
<p>Redeemed Trees: {{ $redeemedTreeCount }}</p> <!-- Display the redeemed trees count -->

@if (session('error'))
    <div class="error-message">{{ session('error') }}</div>
@endif


<form action="{{ route('redeem.tree.submit', ['topPlayerId' => $topPlayerId]) }}" method="post">
    @csrf
    <select name="tree_id">
        @foreach ($trees as $tree)
            <option value="{{ $tree->id }}">{{ $tree->name }}</option>
        @endforeach
    </select>
    <button type="submit">Redeem</button>
</form>
