<!DOCTYPE html>
<html>
<head>
    <title>Stripe Webhook Test</title>
</head>
<body>
    <h1>Stripe Webhook Test</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('webhook.stripe') }}" method="POST">
        @csrf
        <button type="submit">Trigger Webhook</button>
    </form>
</body>
</html>