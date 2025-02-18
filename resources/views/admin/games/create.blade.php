@extends('admin.layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title text-end"><a href="{{route('games.index')}}" class="btn btn-sm btn-dark @if(Request::routeIs('games.index')) active @endif">
            <i class="las la-arrow-left"></i> {{__('All Games')}}
            </a>
        </h4>
    </div>
    <div class="card-body">
        {!! Form::open(array('route' => 'games.store', 'class' => 'forms-sample', 'method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>{{__('Image')}} <small>{{__('(PNG format is standard)')}}</small></strong></label>
                        {!! Form::file('image', array('id' => 'file-input', 'class' => 'form-control', 'required')) !!}
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div id='img_contain'>
                                    <img id="image-preview" class="img-fluid" src="{{asset('public/images/no-image.png')}}" alt="your image"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><strong>{{__('Name')}}</strong></label>
                                {!! Form::text('name', null, array('placeholder' => 'Game Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>{{__('Minimum Amount')}}</strong></label>
                                {!! Form::text('min', null, array('placeholder' => '0','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label><strong>{{__('Maximum Amount')}}</strong></label>
                                {!! Form::text('max', null, array('placeholder' => '0','class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong>{{__('Rules')}}</strong></label>
                        {!! Form::textarea('rules', null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3 me-2">@lang('Submit')</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection