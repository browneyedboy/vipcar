@extends('layouts.master')

@section('title', 'Зар нэмэх')

@section('content')

        <div class="row">
        <form class="addform" action="{{url('add/save')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

            <div class="col-md-6">
                <div class="form-group">
                   <label for="image">Зураг оруулах</label>
                   <input type="file" id="image[]" name="image" multiple>
                   <p class="help">Зурагтай зар илүү олон хүнд хүрдэг гэдгийг анхаарна уу.</p>
                </div>
                <div class="form-group">
                    <label for="categories">Ангилал</label>
                    <select id="categories" class="form-control" name="categories[]" multiple="multiple">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                            @if (old('categories') == $category->id)
                                selected
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <span class="help">Өөрийн зард тохирох ангилалууд сонгоно уу. Жишээ: Зарна, Суудлын машин.</span>
                    @if ($errors->has('categories'))
                        <span class="help-block">
                            {{ $errors->first('categories') }}
                        </span>
                    @endif
                    <!-- undsen angilalaas gantsiig ni l  songoj boldog bh -->
                </div>

                <div class="form-group">
                    <label for="tags">Шошго</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') }}" data-role="tagsinput">
                    <span class="help">Онцлох шинжүүд бичнэ. Жишээ: Toyoto, prius 20. </span>
                    @if ($errors->has('tags'))
                        <span class="help-block">
                            {{ $errors->first('tags') }}
                        </span>
                    @endif
                    <!-- 5 hurtel tag hiih bolomjtoi limit tavih -->
                </div>

                <div class="form-group">
                    <label for="password">Нууц үг</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="****">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Гарчиг</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Гарчиг">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Тайлбар</label>
                    <textarea id="description" class="form-control" rows="3" name="description" placeholder="Дэлгэрэнгүй тайлбар">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            {{ $errors->first('description') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="price">Үнэ</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"  placeholder="Үнэ бичнэ үү">
                    @if ($errors->has('price'))
                        <span class="help-block">
                            {{ $errors->first('price') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contact">Холбоо барих</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}" placeholder="Утас, имэйл хаяг ...">
                    @if ($errors->has('contact'))
                        <span class="help-block">
                            {{ $errors->first('contact') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn button btn-primary" value="Зар оруулах">
                </div>
            </div>
        </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h6>Санамж</h6>
                <p class="text-primary">Таны зар 21 хоног байрших ба автоматаар өөрөө устана. Хэрвээ яаралтай устгах тохиолдолд зарын нууц үг ашиглахыг анхаарна уу.</p>
            </div>
        </div>

@endsection

@section('footerscript')
    <script type="text/javascript" src="js/select2.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $("#categories").select2();
    });
    
    </script>
@endsection