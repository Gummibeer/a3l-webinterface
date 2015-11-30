@extends('emails.email')

@section('content')
	<h1 style="Margin-top: 0;color: #262626;font-weight: 700;font-size: 36px;Margin-bottom: 18px;font-family: Tahoma,sans-serif;line-height: 44px">Password Reset</h1>
	<p style="Margin-top: 0;color: #262626;font-family: sans-serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">
		Click here to reset your password:
		<br />
		{{ url('password/reset/'.$token) }}
	</p>
	<p style="text-align: center;">
		<span class="btn">
			<a href="{{ url('/') }}">zum A3L WebInterface</a>
		</span>
	</p>
@endsection