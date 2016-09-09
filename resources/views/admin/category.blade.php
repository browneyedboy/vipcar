@extends('layouts.admin.master')

@section('title', 'Ангилал')
@section('list', 'active')
@section('category', 'active')

@section('content')
<div id="page-wrapper" class="gray-bg">

        @include('layouts.admin.header')


            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Зарын ангилал</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('vip-admin')}}">Самбар</a>
                        </li>
                        <li>
                            <a>Зар</a>
                        </li>
                        <li class="active">
                            <strong>Ангилал</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                </div>
            </div>

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-sm-4 b-r"><h3 class="m-t-none m-b">Шинийг нэмэх</h3>
                                        <p>Ангилал оруулах талбар.</p>
                                        <form role="form" method="post" action="{{ url('vip-admin/createcategory')}}">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="tags">Ангилал</label>
                                                <select class="form-control" name="parentcategory">
                                                @foreach($categories as $category)
                                                    @if($category->parent_id == 0)
                                                        <option value="{{ $category->id }}">{{ mb_convert_case($category->name, MB_CASE_TITLE, 'UTF-8') }}</option>
                                                    @endif
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Нэр</label> 
                                                <input type="input" placeholder="Ангилалын нэр бичих" name="name" class="form-control">
                                                <span class="help-block m-b-none">нэрийг криллээр бичиж оруулна уу.</span>
                                            </div>
                                            
                                            <div>
                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>
                                                Хадгал</strong></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-8"><h4>Ангилалууд</h4>
                                        <p>Одоо байгаа ангилалууд</p>
                                        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                            <thead>
                                            <tr>

                                                <th>№</th>
                                                <th>Нэр</th>
                                                <th>id</th>
                                                <th>Status</th>
                                                <th class="text-right" data-sort-ignore="true">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{$i=1}}
                                            @foreach($categories as $category)
                                            <tr>
                                                <td>
                                                    {{$i++}}
                                                </td>
                                                <td>
                                                    {{$category->name}}
                                                </td>
                                                <td>
                                                    {{$category->id}}
                                                </td>
                                                <td>
                                                    <span class="label label-primary">Enable</span>
                                                </td>
                                                <td class="text-right">
                                                    <div class="btn-group">
                                                        <button class="btn-white btn btn-xs">Засах</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <ul class="pagination pull-right"></ul>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @include('layouts.admin.footer')
</div>
@endsection



@section('adlist')
    
    <!-- Mainly scripts -->
    <script src="{{ url('admin') }}/js/jquery-2.1.1.js"></script>
    <script src="{{ url('admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('admin') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{ url('admin') }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ url('admin') }}/js/inspinia.js"></script>
    <script src="{{ url('admin') }}/js/plugins/pace/pace.min.js"></script>

    <!-- FooTable -->
    <script src="{{ url('admin') }}/js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>

@endsection