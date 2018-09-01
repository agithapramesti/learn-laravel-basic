@extends('layouts.header')

@section('content')
  <table class="table table-bordered">
    <tr>
      <th>Nama</th>
      <th>Npm</th>
    </tr>
    <tr>
      <td>{{$nama}}</td>
      <td>{{npm}}</td>
    </tr>
  </table>

  @endsection
