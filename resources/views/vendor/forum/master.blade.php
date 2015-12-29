@extends('master')

@section('body-class', 'am-aside')
@section('content-class', 'am-no-padding')

@section('pre-content')
    @include('partials.navbar')
    @include('partials.menubar')
@endsection

@section('page-head')
    <aside class="page-aside">
        <div class="am-scroller nano has-scrollbar">
            <div class="nano-content">
                <div class="content">
                    <div class="aside-header clearfix">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".aside-nav"><span class="icon wh-chevron-down"></span></button>
                        <h2 class="pull-left">{{ trans('menu.forum') }}</h2>
                    </div>
                </div>
                <div class="aside-nav collapse">
                    <ul class="nav">
                        <li><a href="{{ url(config('forum.routing.root')) }}"><i class="icon wh-forumsalt"></i> {{ trans('forum::general.index') }}</a></li>
                    </ul>
                    <p class="title">{{ trans_choice('forum::categories.category', 2) }}</p>
                    <ul class="nav">
                        @foreach($categories as $category)
                            <li><a href="{{ \Forum::route('category.show', $category) }}"><i class="icon wh-bookmark"></i> {{ $category->title }}</a></li>
                            @if(!$category->children->isEmpty())
                                @foreach($category->children as $subcategory)
                                    <li><a href="{{ \Forum::route('category.show', $subcategory) }}"><i class="icon wh-tag"></i> {{ $subcategory->title }}</a></li>
                                @endforeach
                            @endif
                        @endforeach
                    </ul>

                    @can('createCategories')
                        <div class="aside-compose">
                            <a href="#" class="btn btn-primary btn-block">{{ trans('forum::categories.create') }}</a>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </aside>
@endsection

@section('layout')
    @include('forum::partials.alerts')

    @yield('content')
@endsection

@section('post-content')
    @yield('footer')
@endsection
