<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup</title>
</head>
<body>
{!! Form::open(array('url' => 'thanks')) !!}
{!! Form::label('email','email') !!}
{!! Form::text('email') !!}<br><br>

{!! Form::label('os','Operating System') !!}
{!! Form::select('os',array('linux'=>'linux','mac'=>'mac os','windows'=>'windows os')) !!}
<br><br>
{!! Form::label('comment','Comments') !!}
{!! Form::textarea('comment','', array('placeholder'=>'what are your interests?')) !!}
<br><br>
{!! Form::checkbox('agree','yes',false) !!}
{!! Form::label('agree','I agree') !!}
<br><br>
{!! Form::submit('signup') !!}
{!! Form::close() !!}
</body>
</html>