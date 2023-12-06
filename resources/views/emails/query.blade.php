<!DOCTYPE html>
<html>
<head>
    <title>New Query</title>
</head>
<body>
    <h2>New Query Received</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Query:</strong> {{ $data['query'] }}</p>

@endif
</body>
</html>
