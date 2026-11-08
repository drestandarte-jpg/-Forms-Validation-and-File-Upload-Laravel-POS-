<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Create user</title></head>
<body style="font-family:Arial,sans-serif;max-width:650px;margin:40px auto;padding:0 16px;color:#222">
<h1>Create user account</h1><p><a href="{{ route('users.index') }}">Back to user accounts</a></p>
@if($errors->any())<div role="alert" style="color:#a00"><strong>Please fix these errors:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('users.store') }}">@csrf
<p><label for="username">Username</label><br><input id="username" name="username" value="{{ old('username') }}" required maxlength="100" style="width:100%;padding:8px"></p>
<p><label for="full_name">Full name</label><br><input id="full_name" name="full_name" value="{{ old('full_name') }}" required maxlength="255" style="width:100%;padding:8px"></p>
<button type="submit">Save user</button></form>
</body></html>
