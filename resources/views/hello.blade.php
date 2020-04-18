<h1>Name: {{$name}}</h1>
<h1>Age: {{$age}}</h1>


@foreach ($habits as $habit)
    <ul>
    <li>{{$habit}}</li>
    </ul>
@endforeach
