<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Create customer</title></head>
<body style="font-family:Arial,sans-serif;max-width:650px;margin:40px auto;padding:0 16px;color:#222">
<h1>Create customer</h1><p><a href="{{ route('customers.index') }}">Back to customers</a></p>
@if($errors->any())<div role="alert" style="color:#a00"><strong>Please fix these errors:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('customers.store') }}">@csrf
<p><label for="full_name">Full name</label><br><input id="full_name" name="full_name" value="{{ old('full_name') }}" required maxlength="255" style="width:100%;padding:8px"></p>
<p><label for="email">Email</label><br><input id="email" type="email" name="email" value="{{ old('email') }}" required maxlength="255" style="width:100%;padding:8px"></p>
<button type="submit">Save customer</button></form>
</body></html>
