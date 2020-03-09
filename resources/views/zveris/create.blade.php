@extends('main')

@section('title')
    Kuriame Naują Žvėrį
@endsection

@section('content')
    <div style="display:flex;justify-content:center;">
    <form action="" method="post" style="background:green;padding:10px;">
    <h2 style="color:white;">Gyvulių įvedimo konsolė</h2>
    <input type="text" name="gyvulys"><br><small style="color:gray;">Gyvulys</small>
    <br><br>
    <input type="text" name="svoris"><br><small style="color:gray;">Svoris</small>
    <br><br>
    <button style="background:white;border:none;padding:3px;" type="submit">ĮVESTI</button>
    </form>
    </div>
@endsection