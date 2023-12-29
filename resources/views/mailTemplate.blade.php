{{-- @extends('layouts.base')
@section('title', 'Contacts')
@section('content') --}}

<div class="w-50 m-auto">
    <p>
        Ваша форма отправлена успешно!
    </p>
    <p>
        Имя : {{$data['name']}}
    </p>
    <p>
    Почта : {{$data['email']}}    
    </p>
    <p>
   Проект : {{$data['project']}}    
    </p>
    <p>
    Сообщение : {{$data['message']}}    
    </p>
</div>
{{-- @endsection --}}
