@extends('app')

@section('content')
    @can('edit', \App\Event::class)
    {!! Form::open([
        'url' => 'app/calendar/add-event',
    ]) !!}
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title">{{ trans('messages.new_event') }}</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::text('title', null, [
                            'label' => trans('messages.name'),
                            'errors' => $errors->get('title'),
                        ]) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::text('url', null, [
                            'label' => trans('messages.url'),
                            'errors' => $errors->get('url'),
                        ]) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::select('color', trans('messages.colors'), null, [
                            'label' => trans('messages.color'),
                            'errors' => $errors->get('color'),
                        ]) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        {!! Form::text('starting_at', null, [
                            'label' => trans('messages.start'),
                            'placeholder' => 'yyyy-mm-dd',
                            'errors' => $errors->get('starting_at'),
                        ]) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::text('ending_at', null, [
                            'label' => trans('messages.end'),
                            'placeholder' => 'yyyy-mm-dd',
                            'errors' => $errors->get('ending_at'),
                        ]) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        {!! Form::textarea('description', null, [
                            'label' => trans('messages.description'),
                            'errors' => $errors->get('description'),
                            'rows' => '5',
                        ]) !!}
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        {!! Form::submit(trans('messages.save'), [
                            'class' => 'btn-warning pull-right',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    @endcan

    <div class="panel panel-alt4">
        <div class="panel-body full-calendar">
            {!! $calendar->calendar() !!}
        </div>
    </div>

    <div id="md-event" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">{{ trans('messages.event') }}</h3>
                </div>
                <div class="modal-body">
                    <dl class="dl-horizontal">
                        <dt>{{ trans('messages.name') }}</dt>
                        <dd class="event-name"></dd>
                        <dt>{{ trans('messages.start') }}</dt>
                        <dd class="event-start"></dd>
                        <dt>{{ trans('messages.end') }}</dt>
                        <dd class="event-end"></dd>
                        <dt>{{ trans('messages.url') }}</dt>
                        <dd class="event-link"></dd>
                        <dt>{{ trans('messages.description') }}</dt>
                        <dd class="event-description"></dd>
                    </dl>
                </div>
                <div class="modal-footer">
                    @can('delete', \App\Event::class)
                        <a href="#" class="event-delete btn btn-danger" data-href="{{ url('app/calendar/delete-event') }}">{{ trans('messages.delete') }}</a>
                    @endcan
                    <button type="button" data-dismiss="modal" class="btn btn-default">{{ trans('messages.close') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! $calendar->script() !!}
@endsection