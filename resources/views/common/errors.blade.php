@if (count($errors)>0)
{{-- Список ошибок формы --}}
    <div class="alert alert-danger">
        <div>Oops! Something went wrong!</div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif