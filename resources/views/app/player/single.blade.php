@extends('app')

@section('title', $player->name.' - '.trans('menu.players'))

@section('content')
    {!! Form::model($player, [
        'url' => $readonly ? 'dont/do/this' : 'app/player/edit/'.$player->getKey(),
    ]) !!}
    <div class="panel @if($readonly) panel-success @else panel-warning @endif">
        <div class="panel-heading">
            <h4 class="panel-title">{{ $player->name }}</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    {!! Form::text('name', null, [
                        'label' => trans('messages.name'),
                        'readonly' => true,
                    ]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::text('pid', null, [
                        'label' => trans('messages.player_id'),
                        'readonly' => true,
                    ]) !!}
                </div>
                <div class="clearfix"></div>
                @can('edit-money', $player)
                <div class="col-md-3">
                    {!! Form::number('cash', null, [
                        'label' => trans('messages.cash'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-money', $player),
                        'errors' => $errors->get('cash'),
                    ]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::number('bankacc', null, [
                        'label' => trans('messages.bankacc'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-money', $player),
                        'errors' => $errors->get('bankacc'),
                    ]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::number('manipulate_bankacc', null, [
                        'label' => trans('messages.manipulate_bankacc'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-money', $player),
                        'errors' => $errors->get('manipulate_bankacc'),
                    ]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::password('banking_pin', [
                        'label' => trans('messages.banking_pin'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-money', $player),
                        'errors' => $errors->get('banking_pin'),
                    ]) !!}
                </div>
                @endcan
                <div class="clearfix"></div>
                <div class="col-md-3">
                    {!! Form::select('coplevel', trans('messages.coplevel'), null, [
                        'label' => trans('messages.cop'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-cop', $player),
                        'errors' => $errors->get('coplevel'),
                    ]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::select('mediclevel', trans('messages.mediclevel'), null, [
                        'label' => trans('messages.medic'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-medic', $player),
                        'errors' => $errors->get('mediclevel'),
                    ]) !!}
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3">
                    {!! Form::number('adminlevel', null, [
                        'label' => trans('messages.admin'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-admin', $player),
                        'errors' => $errors->get('adminlevel'),
                    ]) !!}
                </div>
                <div class="col-md-3">
                    {!! Form::number('donorlevel', null, [
                        'label' => trans('messages.donator'),
                        'readonly' => $readonly || !\Auth::user()->can('edit-donator', $player),
                        'errors' => $errors->get('donatorlvl'),
                    ]) !!}
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <label>{{ trans('messages.civlicenses') }}</label>
                    <ul class="list-inline">
                        @foreach($player->civ_licenses as $license)
                            <li>
                                <p>
                                    @if(!$readonly && \Auth::user()->can('edit-civ', $player))
                                        <label for="civ_licenses-{{ $license[0] }}" class="cursor-pointer license label @if($license[1]) label-success @else label-dark @endif @if(starts_with(trans('licenses.'.$license[0]), 'Clan')) font-weight-700 @endif">
                                            {!! Form::hidden('civ_licenses['.$license[0].']', ($license[1] ? 1 : 0)) !!}
                                            {{ trans('licenses.'.$license[0]) }}
                                        </label>
                                    @else
                                        <span class="label @if($license[1]) label-success @else label-dark @endif">
                                            {{ trans('licenses.'.$license[0]) }}
                                        </span>
                                    @endif
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @if($player->coplevel > 0)
                    <div class="col-md-12">
                        <label>{{ trans('messages.coplicenses') }}</label>
                        <ul class="list-inline">
                            @foreach($player->cop_licenses as $license)
                                <li>
                                    <p>
                                        @if(!$readonly && \Auth::user()->can('edit-cop', $player))
                                            <label for="cop_licenses-{{ $license[0] }}" class="cursor-pointer license label @if($license[1]) label-success @else label-dark @endif">
                                                {!! Form::hidden('cop_licenses['.$license[0].']', ($license[1] ? 1 : 0)) !!}
                                                {{ trans('licenses.'.$license[0]) }}
                                            </label>
                                        @else
                                            <span class="label @if($license[1]) label-success @else label-dark @endif">
                                                {{ trans('licenses.'.$license[0]) }}
                                            </span>
                                        @endif
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if($player->mediclevel > 0)
                    <div class="col-md-12">
                        <label>{{ trans('messages.mediclicenses') }}</label>
                        <ul class="list-inline">
                            @foreach($player->med_licenses as $license)
                                <li>
                                    <p>
                                        @if(!$readonly && \Auth::user()->can('edit-medic', $player))
                                            <label for="med_licenses-{{ $license[0] }}" class="cursor-pointer license label @if($license[1]) label-success @else label-dark @endif">
                                                {!! Form::hidden('med_licenses['.$license[0].']', ($license[1] ? 1 : 0)) !!}
                                                {{ trans('licenses.'.$license[0]) }}
                                            </label>
                                        @else
                                            <span class="label @if($license[1]) label-success @else label-dark @endif">
                                                {{ trans('licenses.'.$license[0]) }}
                                            </span>
                                        @endif
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(!$readonly)
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="btn-group pull-left">
                            <a href="{{ url('app/player/'.$player->getKey().'/idcard/reset/cop') }}" class="btn btn-default">
                                {{ trans('messages.reset_id_cop') }}
                            </a>
                            <a href="{{ url('app/player/'.$player->getKey().'/idcard/reset/med') }}" class="btn btn-default">
                                {{ trans('messages.reset_id_med') }}
                            </a>
                        </div>
                        {!! Form::submit(trans('messages.save'), [
                            'class' => 'btn-warning pull-right',
                        ]) !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    @include('partials.revisions', ['model' => $player])
@endsection