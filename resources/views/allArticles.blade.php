@extends('layouts.admin')
@section('content')
{{-- <div class="card">
<div class="row mainName"> --}}
<div class="row">
    <div class="col"> 
        <a href="/{{$lang}}/admin/add-article" class="button">
            <span class="plus-icon"></span> Add
        </a>
        <button class="button">
            <span class="trash-icon"></span> Trash
        </button>
    </div>
    </div>
        <table class="table table-no-border-between-columns">
            <thead>
                <tr>
                    <th>Title</th>
                    {{-- <th>Date</th> --}}
                    <th>Action</th>
                    <th>Id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $i)
                <tr>
                    <td>{{$i['title_tm']}}</td>
                    {{-- <td>{{$i['when']}}</td> --}}
                    <td><a href="/{{$lang}}/admin/edit-article/{{$i['id']}}" class="no-line">action</a></td>
                    <td>{{$i['id']}}</td>

                </tr>
                @endforeach
               
                {{-- <tr>
                    <td>Row 3, Cell 1</td>
                    <td>Row 3, Cell 2</td>
                    <td>Row 3, Cell 3</td>
                    <td>Row 3, Cell 4</td>
                </tr> --}}
            </tbody>
        </table>
    </div>


    {{-- <div class="col">
        Login
    </div>
    <div class="col">
      Title
    </div>
    <div class="col">
      Date
    </div>
    <div class="col">
      Action
    </div>
  </div>
  <div class="row">
    <div class="col">
        Archalyk
    </div>
    <div class="col">
        Archalyk
    </div>
    <div class="col">
        Archalyk
    </div>
    <div class="col">
        Archalyk
    </div>

  </div>
</div> --}}
<div class="d-flex justify-content-center">
{{$blog->links()}}
</div>
@endsection
