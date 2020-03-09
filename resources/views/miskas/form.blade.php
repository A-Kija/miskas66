<h1 style="color:red;">Sumatorius</h1>
<form action="{{route('do.math')}}" method="post">

    <input type="text" name="sk1" value="{{old('sk1')}}">
    <b>+</b>
    <input type="text" name="sk2" value="{{old('sk2')}}">
    <button type="submit">=</button>
    <input type="text" value="{{$rez}}" readonly>

    @include('miskas.didelis')

    @csrf

</form>