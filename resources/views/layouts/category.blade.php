<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="@if($category->id == 3) col-md-6 @else col-md-3 @endif">
        
        @if($category->parent_id == 0)
        <h6>{{$category->name}}</h6>
            <ul>
            @foreach($categories as $cat)
                @if($cat->parent_id == $category->id)
                    <li><a href="{{ $cat->id }}">{{ $cat->name }}</a></li>
                @endif
            @endforeach
            </ul>
        @endif
        </div>
        @endforeach
    </div>
</div>