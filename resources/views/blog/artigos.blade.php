@extends('layout.blog')
@section('title', "Artigos do Blog")

@section('content')
    <h1>Programação</h1>

    <table class="table">

      <thead>
        <tr>
          <th>TÍTULO</th>
          <th>PREVIEW</th>
          <th>TEXTO</th>
          <th>AUTOR</th>
          <th>AÇÕES</th>
        </tr>
      </thead>

      <tbody>

        @foreach ($articles as $a)        {{-- Vem do ArticlesController  APP >> HTTP >> CONTROLLERS >> --}}
        <tr>
          <td>{{$a->title}}</td>
          <td>{{$a->preview}}</td>
          <td>{{$a->text}}</td>
          <td>{{$a->author}}</td>
          <td></td>
        </tr>
        @endforeach

      </tbody>

    </table>
@endsection