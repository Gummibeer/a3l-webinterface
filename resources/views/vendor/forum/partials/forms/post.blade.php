{!! Form::open(['url' => $form_url, 'class' => $form_classes]) !!}

@if ( $show_title_field )
<div class="form-group">
    <label for="title">{{ trans('forum::base.title') }}</label>
    {!! Form::text('title', Input::old('title'), ['class' => 'form-control']) !!}
</div>
@endif

<div class="form-group">
    {!! Form::textarea('content', $post_content, ['data-provide' => 'markdown', 'data-iconlibrary' => 'fa', 'class' => 'suggest']) !!}
</div>
<div class="form-group">
    <div class="nav-tabs-horizontal emoji-list">
        <ul class="nav nav-tabs nav-tabs-solid font-size-24" data-plugin="nav-tabs">
            <li class="active"><a data-toggle="tab" href="#emoji-list-emoticon">{!! Twemoji::d('1F600') !!}</a></li>
            <li><a data-toggle="tab" href="#emoji-list-nature">{!! Twemoji::d('1F31E') !!}</a></li>
            <li><a data-toggle="tab" href="#emoji-list-animal">{!! Twemoji::d('1F428') !!}</a></li>
            <li><a data-toggle="tab" href="#emoji-list-food">{!! Twemoji::d('1F35F') !!}</a></li>
            <li><a data-toggle="tab" href="#emoji-list-vehicle">{!! Twemoji::d('1F697') !!}</a></li>
            <li><a data-toggle="tab" href="#emoji-list-object">{!! Twemoji::d('1F52E') !!}</a></li>
        </ul>
        <div class="tab-content clearfix font-size-20">
            <div class="tab-pane active" id="emoji-list-emoticon">
                <ul class="list-inline margin-0">
                    <li>{!! Twemoji::c('1F600') !!}</li>
                    <li>{!! Twemoji::c('1F601') !!}</li>
                    <li>{!! Twemoji::c('1F602') !!}</li>
                    <li>{!! Twemoji::c('1F603') !!}</li>
                    <li>{!! Twemoji::c('1F604') !!}</li>
                    <li>{!! Twemoji::c('1F605') !!}</li>
                    <li>{!! Twemoji::c('1F606') !!}</li>
                    <li>{!! Twemoji::c('1F607') !!}</li>
                    <li>{!! Twemoji::c('1F608') !!}</li>
                    <li>{!! Twemoji::c('1F609') !!}</li>
                    <li>{!! Twemoji::c('1F60A') !!}</li>
                    <li>{!! Twemoji::c('1F60B') !!}</li>
                    <li>{!! Twemoji::c('1F60C') !!}</li>
                    <li>{!! Twemoji::c('1F60D') !!}</li>
                    <li>{!! Twemoji::c('1F60E') !!}</li>
                    <li>{!! Twemoji::c('1F60F') !!}</li>
                    <li>{!! Twemoji::c('1F610') !!}</li>
                    <li>{!! Twemoji::c('1F611') !!}</li>
                    <li>{!! Twemoji::c('1F612') !!}</li>
                    <li>{!! Twemoji::c('1F613') !!}</li>
                    <li>{!! Twemoji::c('1F614') !!}</li>
                    <li>{!! Twemoji::c('1F615') !!}</li>
                    <li>{!! Twemoji::c('1F616') !!}</li>
                    <li>{!! Twemoji::c('1F617') !!}</li>
                    <li>{!! Twemoji::c('1F618') !!}</li>
                    <li>{!! Twemoji::c('1F619') !!}</li>
                    <li>{!! Twemoji::c('1F61A') !!}</li>
                    <li>{!! Twemoji::c('1F61B') !!}</li>
                    <li>{!! Twemoji::c('1F61C') !!}</li>
                    <li>{!! Twemoji::c('1F61D') !!}</li>
                    <li>{!! Twemoji::c('1F61E') !!}</li>
                    <li>{!! Twemoji::c('1F61F') !!}</li>
                    <li>{!! Twemoji::c('1F620') !!}</li>
                    <li>{!! Twemoji::c('1F621') !!}</li>
                    <li>{!! Twemoji::c('1F622') !!}</li>
                    <li>{!! Twemoji::c('1F623') !!}</li>
                    <li>{!! Twemoji::c('1F624') !!}</li>
                    <li>{!! Twemoji::c('1F625') !!}</li>
                    <li>{!! Twemoji::c('1F626') !!}</li>
                    <li>{!! Twemoji::c('1F627') !!}</li>
                    <li>{!! Twemoji::c('1F628') !!}</li>
                    <li>{!! Twemoji::c('1F629') !!}</li>
                    <li>{!! Twemoji::c('1F62A') !!}</li>
                    <li>{!! Twemoji::c('1F62B') !!}</li>
                    <li>{!! Twemoji::c('1F62C') !!}</li>
                    <li>{!! Twemoji::c('1F62D') !!}</li>
                    <li>{!! Twemoji::c('1F62E') !!}</li>
                    <li>{!! Twemoji::c('1F62F') !!}</li>
                    <li>{!! Twemoji::c('1F630') !!}</li>
                    <li>{!! Twemoji::c('1F631') !!}</li>
                    <li>{!! Twemoji::c('1F632') !!}</li>
                    <li>{!! Twemoji::c('1F633') !!}</li>
                    <li>{!! Twemoji::c('1F634') !!}</li>
                    <li>{!! Twemoji::c('1F635') !!}</li>
                    <li>{!! Twemoji::c('1F636') !!}</li>
                    <li>{!! Twemoji::c('1F637') !!}</li>
                    <li>{!! Twemoji::c('263A') !!}</li>
                    <li>{!! Twemoji::c('1F648') !!}</li>
                    <li>{!! Twemoji::c('1F649') !!}</li>
                    <li>{!! Twemoji::c('1F64A') !!}</li>
                    <li>{!! Twemoji::c('1F46E') !!}</li>
                    <li>{!! Twemoji::c('1F477') !!}</li>
                    <li>{!! Twemoji::c('1F47B') !!}</li>
                    <li>{!! Twemoji::c('1F47C') !!}</li>
                    <li>{!! Twemoji::c('1F47D') !!}</li>
                    <li>{!! Twemoji::c('1F47E') !!}</li>
                    <li>{!! Twemoji::c('1F47F') !!}</li>
                    <li>{!! Twemoji::c('1F480') !!}</li>
                    <li>{!! Twemoji::c('1F482') !!}</li>
                    <li>{!! Twemoji::c('1F440') !!}</li>
                    <li>{!! Twemoji::c('1F442') !!}</li>
                    <li>{!! Twemoji::c('1F443') !!}</li>
                    <li>{!! Twemoji::c('1F444') !!}</li>
                    <li>{!! Twemoji::c('1F445') !!}</li>
                    <li>{!! Twemoji::c('1F446') !!}</li>
                    <li>{!! Twemoji::c('1F447') !!}</li>
                    <li>{!! Twemoji::c('1F448') !!}</li>
                    <li>{!! Twemoji::c('1F449') !!}</li>
                    <li>{!! Twemoji::c('1F44A') !!}</li>
                    <li>{!! Twemoji::c('1F44B') !!}</li>
                    <li>{!! Twemoji::c('1F44C') !!}</li>
                    <li>{!! Twemoji::c('1F44D') !!}</li>
                    <li>{!! Twemoji::c('1F44E') !!}</li>
                    <li>{!! Twemoji::c('1F44F') !!}</li>
                    <li>{!! Twemoji::c('1F450') !!}</li>
                    <li>{!! Twemoji::c('261D') !!}</li>
                    <li>{!! Twemoji::c('270A') !!}</li>
                    <li>{!! Twemoji::c('270B') !!}</li>
                    <li>{!! Twemoji::c('270C') !!}</li>
                    <li>{!! Twemoji::c('1F4AA') !!}</li>
                    <li>{!! Twemoji::c('1F64C') !!}</li>
                </ul>
            </div>
            <div class="tab-pane" id="emoji-list-nature">
                <ul class="list-inline margin-0">
                    <li>{!! Twemoji::c('1F300') !!}</li>
                    <li>{!! Twemoji::c('1F302') !!}</li>
                    <li>{!! Twemoji::c('1F30D') !!}</li>
                    <li>{!! Twemoji::c('1F31D') !!}</li>
                    <li>{!! Twemoji::c('1F31E') !!}</li>
                    <li>{!! Twemoji::c('1F31F') !!}</li>
                    <li>{!! Twemoji::c('2600') !!}</li>
                    <li>{!! Twemoji::c('2601') !!}</li>
                    <li>{!! Twemoji::c('2614') !!}</li>
                    <li>{!! Twemoji::c('26C4') !!}</li>
                    <li>{!! Twemoji::c('26C5') !!}</li>
                    <li>{!! Twemoji::c('2744') !!}</li>
                    <li>{!! Twemoji::c('1F525') !!}</li>
                    <li>{!! Twemoji::c('1F330') !!}</li>
                    <li>{!! Twemoji::c('1F331') !!}</li>
                    <li>{!! Twemoji::c('1F332') !!}</li>
                    <li>{!! Twemoji::c('1F333') !!}</li>
                    <li>{!! Twemoji::c('1F334') !!}</li>
                    <li>{!! Twemoji::c('1F335') !!}</li>
                    <li>{!! Twemoji::c('1F337') !!}</li>
                    <li>{!! Twemoji::c('1F338') !!}</li>
                    <li>{!! Twemoji::c('1F339') !!}</li>
                    <li>{!! Twemoji::c('1F33A') !!}</li>
                    <li>{!! Twemoji::c('1F33B') !!}</li>
                    <li>{!! Twemoji::c('1F33C') !!}</li>
                    <li>{!! Twemoji::c('1F33D') !!}</li>
                    <li>{!! Twemoji::c('1F33E') !!}</li>
                    <li>{!! Twemoji::c('1F33F') !!}</li>
                    <li>{!! Twemoji::c('1F340') !!}</li>
                    <li>{!! Twemoji::c('1F341') !!}</li>
                    <li>{!! Twemoji::c('1F342') !!}</li>
                    <li>{!! Twemoji::c('1F343') !!}</li>
                    <li>{!! Twemoji::c('1F344') !!}</li>
                </ul>
            </div>
            <div class="tab-pane" id="emoji-list-animal">
                <ul class="list-inline margin-0">
                    <li>{!! Twemoji::c('1F400') !!}</li>
                    <li>{!! Twemoji::c('1F401') !!}</li>
                    <li>{!! Twemoji::c('1F402') !!}</li>
                    <li>{!! Twemoji::c('1F403') !!}</li>
                    <li>{!! Twemoji::c('1F404') !!}</li>
                    <li>{!! Twemoji::c('1F405') !!}</li>
                    <li>{!! Twemoji::c('1F406') !!}</li>
                    <li>{!! Twemoji::c('1F407') !!}</li>
                    <li>{!! Twemoji::c('1F408') !!}</li>
                    <li>{!! Twemoji::c('1F409') !!}</li>
                    <li>{!! Twemoji::c('1F40A') !!}</li>
                    <li>{!! Twemoji::c('1F40B') !!}</li>
                    <li>{!! Twemoji::c('1F40C') !!}</li>
                    <li>{!! Twemoji::c('1F40D') !!}</li>
                    <li>{!! Twemoji::c('1F40E') !!}</li>
                    <li>{!! Twemoji::c('1F40F') !!}</li>
                    <li>{!! Twemoji::c('1F410') !!}</li>
                    <li>{!! Twemoji::c('1F411') !!}</li>
                    <li>{!! Twemoji::c('1F412') !!}</li>
                    <li>{!! Twemoji::c('1F413') !!}</li>
                    <li>{!! Twemoji::c('1F414') !!}</li>
                    <li>{!! Twemoji::c('1F415') !!}</li>
                    <li>{!! Twemoji::c('1F416') !!}</li>
                    <li>{!! Twemoji::c('1F417') !!}</li>
                    <li>{!! Twemoji::c('1F418') !!}</li>
                    <li>{!! Twemoji::c('1F419') !!}</li>
                    <li>{!! Twemoji::c('1F41A') !!}</li>
                    <li>{!! Twemoji::c('1F41B') !!}</li>
                    <li>{!! Twemoji::c('1F41C') !!}</li>
                    <li>{!! Twemoji::c('1F41D') !!}</li>
                    <li>{!! Twemoji::c('1F41E') !!}</li>
                    <li>{!! Twemoji::c('1F41F') !!}</li>
                    <li>{!! Twemoji::c('1F420') !!}</li>
                    <li>{!! Twemoji::c('1F421') !!}</li>
                    <li>{!! Twemoji::c('1F422') !!}</li>
                    <li>{!! Twemoji::c('1F423') !!}</li>
                    <li>{!! Twemoji::c('1F424') !!}</li>
                    <li>{!! Twemoji::c('1F425') !!}</li>
                    <li>{!! Twemoji::c('1F426') !!}</li>
                    <li>{!! Twemoji::c('1F427') !!}</li>
                    <li>{!! Twemoji::c('1F428') !!}</li>
                    <li>{!! Twemoji::c('1F429') !!}</li>
                    <li>{!! Twemoji::c('1F42A') !!}</li>
                    <li>{!! Twemoji::c('1F42B') !!}</li>
                    <li>{!! Twemoji::c('1F42C') !!}</li>
                    <li>{!! Twemoji::c('1F42D') !!}</li>
                    <li>{!! Twemoji::c('1F42E') !!}</li>
                    <li>{!! Twemoji::c('1F42F') !!}</li>
                    <li>{!! Twemoji::c('1F430') !!}</li>
                    <li>{!! Twemoji::c('1F431') !!}</li>
                    <li>{!! Twemoji::c('1F432') !!}</li>
                    <li>{!! Twemoji::c('1F433') !!}</li>
                    <li>{!! Twemoji::c('1F434') !!}</li>
                    <li>{!! Twemoji::c('1F435') !!}</li>
                    <li>{!! Twemoji::c('1F436') !!}</li>
                    <li>{!! Twemoji::c('1F437') !!}</li>
                    <li>{!! Twemoji::c('1F438') !!}</li>
                    <li>{!! Twemoji::c('1F439') !!}</li>
                    <li>{!! Twemoji::c('1F43A') !!}</li>
                    <li>{!! Twemoji::c('1F43B') !!}</li>
                    <li>{!! Twemoji::c('1F43C') !!}</li>
                    <li>{!! Twemoji::c('1F43D') !!}</li>
                    <li>{!! Twemoji::c('1F43E') !!}</li>
                </ul>
            </div>
            <div class="tab-pane" id="emoji-list-food">
                <ul class="list-inline margin-0">
                    <li>{!! Twemoji::c('1F345') !!}</li>
                    <li>{!! Twemoji::c('1F346') !!}</li>
                    <li>{!! Twemoji::c('1F347') !!}</li>
                    <li>{!! Twemoji::c('1F348') !!}</li>
                    <li>{!! Twemoji::c('1F349') !!}</li>
                    <li>{!! Twemoji::c('1F34A') !!}</li>
                    <li>{!! Twemoji::c('1F34B') !!}</li>
                    <li>{!! Twemoji::c('1F34C') !!}</li>
                    <li>{!! Twemoji::c('1F34D') !!}</li>
                    <li>{!! Twemoji::c('1F34E') !!}</li>
                    <li>{!! Twemoji::c('1F34F') !!}</li>
                    <li>{!! Twemoji::c('1F350') !!}</li>
                    <li>{!! Twemoji::c('1F351') !!}</li>
                    <li>{!! Twemoji::c('1F352') !!}</li>
                    <li>{!! Twemoji::c('1F353') !!}</li>
                    <li>{!! Twemoji::c('1F354') !!}</li>
                    <li>{!! Twemoji::c('1F355') !!}</li>
                    <li>{!! Twemoji::c('1F356') !!}</li>
                    <li>{!! Twemoji::c('1F357') !!}</li>
                    <li>{!! Twemoji::c('1F358') !!}</li>
                    <li>{!! Twemoji::c('1F359') !!}</li>
                    <li>{!! Twemoji::c('1F35A') !!}</li>
                    <li>{!! Twemoji::c('1F35B') !!}</li>
                    <li>{!! Twemoji::c('1F35C') !!}</li>
                    <li>{!! Twemoji::c('1F35D') !!}</li>
                    <li>{!! Twemoji::c('1F35E') !!}</li>
                    <li>{!! Twemoji::c('1F35F') !!}</li>
                    <li>{!! Twemoji::c('1F360') !!}</li>
                    <li>{!! Twemoji::c('1F361') !!}</li>
                    <li>{!! Twemoji::c('1F362') !!}</li>
                    <li>{!! Twemoji::c('1F363') !!}</li>
                    <li>{!! Twemoji::c('1F364') !!}</li>
                    <li>{!! Twemoji::c('1F365') !!}</li>
                    <li>{!! Twemoji::c('1F366') !!}</li>
                    <li>{!! Twemoji::c('1F367') !!}</li>
                    <li>{!! Twemoji::c('1F368') !!}</li>
                    <li>{!! Twemoji::c('1F369') !!}</li>
                    <li>{!! Twemoji::c('1F36A') !!}</li>
                    <li>{!! Twemoji::c('1F36B') !!}</li>
                    <li>{!! Twemoji::c('1F36C') !!}</li>
                    <li>{!! Twemoji::c('1F36D') !!}</li>
                    <li>{!! Twemoji::c('1F36E') !!}</li>
                    <li>{!! Twemoji::c('1F36F') !!}</li>
                    <li>{!! Twemoji::c('1F370') !!}</li>
                    <li>{!! Twemoji::c('1F371') !!}</li>
                    <li>{!! Twemoji::c('1F372') !!}</li>
                    <li>{!! Twemoji::c('1F373') !!}</li>
                    <li>{!! Twemoji::c('1F374') !!}</li>
                    <li>{!! Twemoji::c('1F375') !!}</li>
                    <li>{!! Twemoji::c('1F376') !!}</li>
                    <li>{!! Twemoji::c('1F377') !!}</li>
                    <li>{!! Twemoji::c('1F378') !!}</li>
                    <li>{!! Twemoji::c('1F379') !!}</li>
                    <li>{!! Twemoji::c('1F37A') !!}</li>
                    <li>{!! Twemoji::c('1F37B') !!}</li>
                    <li>{!! Twemoji::c('1F37C') !!}</li>
                    <li>{!! Twemoji::c('2615') !!}</li>
                </ul>
            </div>
            <div class="tab-pane" id="emoji-list-vehicle">
                <ul class="list-inline margin-0">
                    <li>{!! Twemoji::c('1F680') !!}</li>
                    <li>{!! Twemoji::c('1F681') !!}</li>
                    <li>{!! Twemoji::c('1F682') !!}</li>
                    <li>{!! Twemoji::c('1F683') !!}</li>
                    <li>{!! Twemoji::c('1F684') !!}</li>
                    <li>{!! Twemoji::c('1F685') !!}</li>
                    <li>{!! Twemoji::c('1F686') !!}</li>
                    <li>{!! Twemoji::c('1F687') !!}</li>
                    <li>{!! Twemoji::c('1F688') !!}</li>
                    <li>{!! Twemoji::c('1F689') !!}</li>
                    <li>{!! Twemoji::c('1F68A') !!}</li>
                    <li>{!! Twemoji::c('1F68B') !!}</li>
                    <li>{!! Twemoji::c('1F68C') !!}</li>
                    <li>{!! Twemoji::c('1F68D') !!}</li>
                    <li>{!! Twemoji::c('1F68E') !!}</li>
                    <li>{!! Twemoji::c('1F68F') !!}</li>
                    <li>{!! Twemoji::c('1F690') !!}</li>
                    <li>{!! Twemoji::c('1F691') !!}</li>
                    <li>{!! Twemoji::c('1F692') !!}</li>
                    <li>{!! Twemoji::c('1F693') !!}</li>
                    <li>{!! Twemoji::c('1F694') !!}</li>
                    <li>{!! Twemoji::c('1F695') !!}</li>
                    <li>{!! Twemoji::c('1F696') !!}</li>
                    <li>{!! Twemoji::c('1F697') !!}</li>
                    <li>{!! Twemoji::c('1F698') !!}</li>
                    <li>{!! Twemoji::c('1F699') !!}</li>
                    <li>{!! Twemoji::c('1F69A') !!}</li>
                    <li>{!! Twemoji::c('1F69B') !!}</li>
                    <li>{!! Twemoji::c('1F69C') !!}</li>
                    <li>{!! Twemoji::c('1F69D') !!}</li>
                    <li>{!! Twemoji::c('1F69E') !!}</li>
                    <li>{!! Twemoji::c('1F69F') !!}</li>
                    <li>{!! Twemoji::c('1F6A0') !!}</li>
                    <li>{!! Twemoji::c('1F6A1') !!}</li>
                    <li>{!! Twemoji::c('1F6A2') !!}</li>
                    <li>{!! Twemoji::c('1F6A3') !!}</li>
                    <li>{!! Twemoji::c('1F6A4') !!}</li>
                    <li>{!! Twemoji::c('1F6B2') !!}</li>
                    <li>{!! Twemoji::c('2708') !!}</li>
                    <li>{!! Twemoji::c('1F3E0') !!}</li>
                    <li>{!! Twemoji::c('1F3E1') !!}</li>
                    <li>{!! Twemoji::c('1F3E2') !!}</li>
                    <li>{!! Twemoji::c('1F3E3') !!}</li>
                    <li>{!! Twemoji::c('1F3E4') !!}</li>
                    <li>{!! Twemoji::c('1F3E5') !!}</li>
                    <li>{!! Twemoji::c('1F3E6') !!}</li>
                    <li>{!! Twemoji::c('1F3E8') !!}</li>
                    <li>{!! Twemoji::c('1F3E9') !!}</li>
                    <li>{!! Twemoji::c('1F3EA') !!}</li>
                    <li>{!! Twemoji::c('1F3EB') !!}</li>
                    <li>{!! Twemoji::c('1F3EC') !!}</li>
                    <li>{!! Twemoji::c('1F3ED') !!}</li>
                </ul>
            </div>
            <div class="tab-pane" id="emoji-list-object">
                <ul class="list-inline margin-0">
                    <li>{!! Twemoji::c('1F6A5') !!}</li>
                    <li>{!! Twemoji::c('1F6A6') !!}</li>
                    <li>{!! Twemoji::c('1F6A7') !!}</li>
                    <li>{!! Twemoji::c('1F6A8') !!}</li>
                    <li>{!! Twemoji::c('1F6A9') !!}</li>
                    <li>{!! Twemoji::c('1F6AA') !!}</li>
                    <li>{!! Twemoji::c('1F6AC') !!}</li>
                    <li>{!! Twemoji::c('1F6BD') !!}</li>
                    <li>{!! Twemoji::c('1F6BF') !!}</li>
                    <li>{!! Twemoji::c('1F6C0') !!}</li>
                    <li>{!! Twemoji::c('1F6C1') !!}</li>
                    <li>{!! Twemoji::c('26FD') !!}</li>
                    <li>{!! Twemoji::c('2764') !!}</li>
                    <li>{!! Twemoji::c('1F516') !!}</li>
                    <li>{!! Twemoji::c('1F517') !!}</li>
                    <li>{!! Twemoji::c('1F526') !!}</li>
                    <li>{!! Twemoji::c('1F527') !!}</li>
                    <li>{!! Twemoji::c('1F528') !!}</li>
                    <li>{!! Twemoji::c('1F529') !!}</li>
                    <li>{!! Twemoji::c('1F52A') !!}</li>
                    <li>{!! Twemoji::c('1F52B') !!}</li>
                    <li>{!! Twemoji::c('1F52C') !!}</li>
                    <li>{!! Twemoji::c('1F52D') !!}</li>
                    <li>{!! Twemoji::c('1F52E') !!}</li>
                    <li>{!! Twemoji::c('1F552') !!}</li>
                    <li>{!! Twemoji::c('1F489') !!}</li>
                    <li>{!! Twemoji::c('1F48A') !!}</li>
                    <li>{!! Twemoji::c('1F48B') !!}</li>
                    <li>{!! Twemoji::c('1F48C') !!}</li>
                    <li>{!! Twemoji::c('1F48D') !!}</li>
                    <li>{!! Twemoji::c('1F48E') !!}</li>
                    <li>{!! Twemoji::c('1F490') !!}</li>
                    <li>{!! Twemoji::c('1F493') !!}</li>
                    <li>{!! Twemoji::c('1F494') !!}</li>
                    <li>{!! Twemoji::c('1F495') !!}</li>
                    <li>{!! Twemoji::c('1F496') !!}</li>
                    <li>{!! Twemoji::c('1F497') !!}</li>
                    <li>{!! Twemoji::c('1F498') !!}</li>
                    <li>{!! Twemoji::c('1F49D') !!}</li>
                    <li>{!! Twemoji::c('1F4A1') !!}</li>
                    <li>{!! Twemoji::c('1F4A3') !!}</li>
                    <li>{!! Twemoji::c('1F4A9') !!}</li>
                    <li>{!! Twemoji::c('1F4B0') !!}</li>
                    <li>{!! Twemoji::c('1F4B3') !!}</li>
                    <li>{!! Twemoji::c('1F4B4') !!}</li>
                    <li>{!! Twemoji::c('1F4B5') !!}</li>
                    <li>{!! Twemoji::c('1F4B6') !!}</li>
                    <li>{!! Twemoji::c('1F4B7') !!}</li>
                    <li>{!! Twemoji::c('1F4B8') !!}</li>
                    <li>{!! Twemoji::c('1F4CC') !!}</li>
                    <li>{!! Twemoji::c('1F4E6') !!}</li>
                    <li>{!! Twemoji::c('1F380') !!}</li>
                    <li>{!! Twemoji::c('1F381') !!}</li>
                    <li>{!! Twemoji::c('1F382') !!}</li>
                    <li>{!! Twemoji::c('1F383') !!}</li>
                    <li>{!! Twemoji::c('1F384') !!}</li>
                    <li>{!! Twemoji::c('1F385') !!}</li>
                    <li>{!! Twemoji::c('1F388') !!}</li>
                    <li>{!! Twemoji::c('1F389') !!}</li>
                    <li>{!! Twemoji::c('1F38A') !!}</li>
                    <li>{!! Twemoji::c('1F38B') !!}</li>
                    <li>{!! Twemoji::c('1F38C') !!}</li>
                    <li>{!! Twemoji::c('1F38D') !!}</li>
                    <li>{!! Twemoji::c('1F38E') !!}</li>
                    <li>{!! Twemoji::c('1F38F') !!}</li>
                    <li>{!! Twemoji::c('1F390') !!}</li>
                    <li>{!! Twemoji::c('1F392') !!}</li>
                    <li>{!! Twemoji::c('1F393') !!}</li>
                    <li>{!! Twemoji::c('1F3A3') !!}</li>
                    <li>{!! Twemoji::c('1F3A4') !!}</li>
                    <li>{!! Twemoji::c('1F3A5') !!}</li>
                    <li>{!! Twemoji::c('1F3A7') !!}</li>
                    <li>{!! Twemoji::c('1F3A8') !!}</li>
                    <li>{!! Twemoji::c('1F3A9') !!}</li>
                    <li>{!! Twemoji::c('1F3AA') !!}</li>
                    <li>{!! Twemoji::c('1F3AB') !!}</li>
                    <li>{!! Twemoji::c('1F3AC') !!}</li>
                    <li>{!! Twemoji::c('1F3AD') !!}</li>
                    <li>{!! Twemoji::c('1F3AE') !!}</li>
                    <li>{!! Twemoji::c('1F3AF') !!}</li>
                    <li>{!! Twemoji::c('1F3B0') !!}</li>
                    <li>{!! Twemoji::c('1F3B1') !!}</li>
                    <li>{!! Twemoji::c('1F3B2') !!}</li>
                    <li>{!! Twemoji::c('1F3B3') !!}</li>
                    <li>{!! Twemoji::c('1F3B4') !!}</li>
                    <li>{!! Twemoji::c('1F3C1') !!}</li>
                    <li>{!! Twemoji::c('1F3C6') !!}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">{{ $submit_label }}</button>
@if ( $cancel_url )
<a href="{{ $cancel_url }}" class="btn btn-default">{{ trans('forum::base.cancel') }}</a>
@endif

{!! Form::close() !!}
