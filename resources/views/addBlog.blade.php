@extends('layouts.app')
@section('content')


    {{-- <div class="row"> --}}
    <span class="navBtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
       <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Articles / </span> Add Article
        </h4>
    {{-- </div> --}}

<form method="POST" enctype="multipart/form-data">
 @csrf
<div class="row">
  <div class="col-12">
  <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item" id="tm-btn">
        <span class="nav-link active">
{{--          <img src="/assets/img/icons/unicons/tm-flag.png" width="20">--}}
          Turkmen
        </span>
      </li>
      <li class="nav-item" id="ru-btn">
        <span class="nav-link">
{{--          <img src="/assets/img/icons/unicons/ru-flag.png" width="20">--}}
          Russian
        </span>
      </li>
      <li class="nav-item" id="eng-btn">
        <span class="nav-link">
{{--          <img src="/assets/img/icons/unicons/en-flag.png" width="20">--}}
         English
        </span>
      </li>
    </ul>
  </div>

   
        {{-- </div> --}}
  {{-- <div class="col-md-6" h-75> --}}
    <div class="card mb-4">
      <hr class="my-0"/>
        {{-- tm-card-info --}}
        <div class="card-body info-cards" id="tm-card">
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="title_tm" class="form-label">Title</label>
                    <input class="form-control" type="text" id="title_tm" name="title_tm" placeholder="Title" autofocus/>
                    {{--              <span class="text-danger">@error('ru_name'){{$message}}@enderror</span>--}}
                </div>
                    @include('editor', ['lang'=>'editor_tm'])
                  <input type="hidden" name="desc_tm" class="editor_tm">
                 
              {{-- </div> --}}
            </div>
        </div>

        {{-- ru-card-info --}}
        <div class="card-body info-cards dnone" id="ru-card">
          <div class="row">
            <div class="mb-3 col-md-12">
              <label for="title_ru" class="form-label">Title</label>
              
              <input class="form-control" type="text" id="title_ru" name="title_ru" placeholder="Title" autofocus/>
{{--              <span class="text-danger">@error('ru_name'){{$message}}@enderror</span>--}}
            </div>
          
               @include('editor', ['lang'=>'editor_ru'])
               <input type="hidden" name="desc_ru" class="editor_ru">
            
            {{-- </div> --}}
          </div>
        </div>


        {{-- eng-card-info --}}
        <div class="card-body info-cards dnone" id="eng-card">
            <div class="row">
                <div class="mb-3 col-md-12">
                    <label for="title_en" class="form-label">Title</label>
                    <input class="form-control" type="text" id="title_en" name="title_en" placeholder="Title" autofocus/>
                    {{--              <span class="text-danger">@error('ru_name'){{$message}}@enderror</span>--}}
                </div>
                <div class="row">
                  <style>
                    .toolbar a {
	display: inline-block;
	border: 1px solid #888;
	padding: 5px 8px;
	margin: 0 5px 10px 0;
	color: #000;
	border-radius: 3px;
	font-size: 12px;
	box-shadow: 1px 1px 2px #ddd;
	background: #fff;
	vertical-align: top;
	text-decoration: none;
}
.toolbar select {
	display: inline-block;
	height: 28px;
	line-height: 28px;
	background: #fff;
	padding: 0;
	margin: 0 5px 10px 0;
	color: #000;
	box-shadow: 1px 1px 2px #ddd;
	border-radius: 3px;
	vertical-align: top;
  	font-size: 12px;
}
.toolbar input {
	display: inline-block;
	height: 28px;
	line-height: 28px;
	background: #fff;
	padding: 0;
	margin: 0 5px 10px 0;
	color: #000;
	box-shadow: 1px 1px 2px #ddd;
	border-radius: 3px;
	vertical-align: top;
	font-size: 12px;
}
.toolbar span {
	display: inline-block;
	height: 30px;
	line-height: 30px;
	padding: 0;
	margin: 0 0 10px 0;
	color: #000;
	vertical-align: top;
	font-size: 12px;
}
.editor {
	min-height: 150px;
	border: 1px solid #ddd;
	padding: 10px;
	border-radius: 2px;
	box-shadow: 1px 1px 2px #ddd;
	background: #fff;
}
                  </style>
                  @include('editor', ['lang'=>'editor_en'])
                  <input type="hidden" name="desc_en" class="editor_en">
              {{-- </div> --}}
            </div>
        </div>
    </div>
    <div class="row">
      <div class="mb-3 col-md-12">
          <label for="formFile" class="form-label">Image</label>
          <input class="form-control" type="file" name="image" id="formFile" accept="image/*">
      </div>
  </div>
  {{-- <div class="col-md-6 h-75"> --}}
    <div class="card mb-4">
      <hr class="my-0" />
      <div class="card-body">
          {{-- <div class="row"> --}}
          
          <div class="mb-3 col-md-12">
            <label for="select" class="form-label">What?</label>
            <select class="form-control" name="what" id= "select" onchange="handleSelectChange(this)">
              <option value="Different">Всякое </option>
              <option value="News">Новости </option>
              <option value="Useful">Полезности </option>
              <option value="Digital">Статьи про диджитал </option>
              <option value="Other">Other</option>
            </select>
    <div id="otherInputContainer-blog"></div>
                  </div>
          {{-- </div> --}}
          </div>
        </div>
 {{--                <option <?php echo count() != 0 ? "hidden" : ""; ?> value="">{{__('words.select-hall')}}</option>--}}
</div>
   <div class="mt-5">
        <button type="submit" class="btn btn-primary me-2 send">
            Save
        </button>
        {{-- <a href="/{{$lang}}/admin/exhibits"> --}}
            <button type="button" class="btn btn-outline-secondary ">
               Cancel
            </button>
        {{-- </a> --}}
    </div>
  </form>
{{--</div>--}}

<script>
  function handleSelectChange(selectElement) {
      const selectedValue = selectElement.value;
      const otherInputContainer = document.getElementById('otherInputContainer-blog');
  
      if (selectedValue === 'Other') {
          // Replace select with an input field
          const inputElement = document.createElement('input');
          inputElement.type = 'text';
          inputElement.id = 'otherInput';
          inputElement.name = 'otherInput'; // Set a name if you need to submit it in a form
          inputElement.placeholder = 'Enter other option...';
  
          // Copy select's attributes
          const selectAttributes = selectElement.attributes;
          for (let i = 0; i < selectAttributes.length; i++) {
              const attr = selectAttributes[i];
              if (attr.name !== 'id' && attr.name !== 'onchange') {
                  inputElement.setAttribute(attr.name, attr.value);
              }
          }
  
          // Copy select's options
          const selectOptions = selectElement.querySelectorAll('option');
          selectOptions.forEach(function(option) {
              const newOption = document.createElement('option');
              newOption.value = option.value;
              newOption.text = option.text;
              inputElement.appendChild(newOption);
          });
  
          // Replace the select element with the input element
          selectElement.parentNode.replaceChild(inputElement, selectElement);
      }
  }
</script>
@endsection
