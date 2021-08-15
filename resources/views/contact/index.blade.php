@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          <div>
            <a href="{{route('contact.create')}}" class="btn btn-primary">
              新規登録
            </a>
          </div>

          <div class="row">
            <form class="d-flex col-md-4 my-2" method="GET" action="{{route('contact.index')}}">
              <input class="form-control me-2 mr-2" name="search" type="search" placeholder="氏名" aria-label="Search">
              <button class="btn btn-outline-success text-nowrap" type="submit">検索する</button>
            </form>
          </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">氏名</th>
                <th scope="col">件名</th>
                <th scope="col">登録日時</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($contacts as $contact)
              <tr>
                <th>{{$contact->id}} </th>
                <td>{{$contact->your_name}}</td>
                <td> {{$contact->title}}</td>
                <td>{{$contact->created_at}}</td>
                <td>
                  <a href="{{ route('contact.show', ['id' => $contact->id] ) }}" class="btn btn-info">詳細を見る</a>
                </td> 
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $contacts->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection