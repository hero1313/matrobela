@extends('admin.index')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <form action='{{ route('update.parameter') }}' enctype='multipart/form-data' method='post'
            enctype=multipart/form-data>
            @csrf
            @method('PUT')
            <div class="mt-3 form-group">
                <label for="exampleInputEmail1">სახელი</label>
                <input type="text" name='name' value="{{ $company->name }}" class="mt-2 form-control">
            </div>
            <div class="mt-3 form-group">
                <label for="exampleInputEmail1">ელფოსტა</label>
                <input type="email" name='email' value="{{ $company->email }}" class="mt-2 form-control">
            </div>
            <div class="mt-3 mb-3 form-group">
                <label for="exampleInputEmail1">ჩვენ შესახებ ტექსტი (ge)</label>
                <textarea type="text" name='about_text_ge' class="tiny">{{ $company->about_text_ge }}</textarea>
            </div>
            <div class="mt-3 mb-3 form-group">
                <label for="exampleInputEmail1">ჩვენ შესახებ ტექსტი (en)</label>
                <textarea type="text" name='about_text_en' class="tiny">{{ $company->about_text_en }}</textarea>
            </div>
            <div class="mt-3 mb-3 form-group">
                <label for="exampleInputEmail1">კომოპანიის შესახებ (en)</label>
                <textarea type="text" name='company_text_ge' class="tiny">{{ $company->company_text_ge }}</textarea>
            </div>
            <div class="mt-3 mb-3 form-group">
                <label for="exampleInputEmail1">კომოპანიის შესახებ (ge)</label>
                <textarea type="text" name='company_text_en' class="tiny">{{ $company->company_text_en }}</textarea>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">შენახვა</button>
        </form>
    </div>
@stop
