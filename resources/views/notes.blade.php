<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    @foreach($notes as $note)
   <li>
    {{ $note->note}}
   </li>
   @endforeach

<form method="POST">
{!! csrf_field() !!}
<textarea></textarea>
<button type="Submit">Create note </button>
</form>

</body>
</html>