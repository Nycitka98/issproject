@extends('layouts.app')

@section('content')
    
      
      
      
      <h3> Príjem v sklade</h3>
      <br>
      {!! Form::open(['action' => 'App\Http\Controllers\SkladController@store', 'method' => 'POST']) !!}
              <div class="row">  
                <div class="form-group col-md-2">
                  
                    {{Form::number('datle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('mandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('marcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('orechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])}}
                </div>
                <div class="form-group col-md-2">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                
                
            </div>
        </div>
        {!! Form::close() !!}
       
        @if(count($sklads) > 0)
                @foreach($sklads as $sklad)
               
                <br>
                     {{$sklad->datle}} {{$sklad->mandle}} {{$sklad->marcipan}} {{$sklad->orechy}}
                     
                    
                @endforeach
          
                @else
                <p>nenasli sa zaznamy</p>
                @endif
       <br> 
      
       <br>
       <br>
       <br>
       <h3>Zo skladu do výroby</h3>
      <br>
      {!! Form::open(['action' => 'App\Http\Controllers\ZoskladudovyrobyController@store', 'method' => 'POST']) !!}
              <div class="row">  
                <div class="form-group col-md-2">
                  
                    {{Form::number('zoskladudovyrobydatle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('zoskladudovyrobymandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('zoskladudovyrobymarcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('zoskladudovyrobyorechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])}}
                </div>
                <div class="form-group col-md-2">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        </div>
       {!! Form::close() !!}
       @foreach($zoskladudovyrobies as $zoskladudovyrobysklad)
      
       <br>
            {{$zoskladudovyroby->datle}} {{$zoskladudovyroby->mandle}} {{$zoskladudovyroby->marcipan}} {{$zoskladudovyroby->orechy}}
           
       @endforeach
       
       
      
       <br>
       <br>
       <br>
       <br>
       <h3> Medzisklad</h3>
      <br>
      {!! Form::open(['action' => 'App\Http\Controllers\MedziskladController@store', 'method' => 'POST']) !!}
              <div class="row">  
                <div class="form-group col-md-2">
                  
                    {{Form::number('medzidatle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('medzimandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('medzimarcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('medziorechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])}}
                </div>
                <div class="form-group col-md-2">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        </div>
       {!! Form::close() !!}
 
        @foreach($medzisklads as $medzisklad)
      
       <br>
            {{$medzisklad->datle}} {{$medzisklad->mandle}} {{$medzisklad->marcipan}} {{$medzisklad->orechy}}
           
       @endforeach
 
      
      
       
       
       
       <br>
       <br>
       <br>
       <br>
       <h3> Výdaj zo skladu</h3>
      <br>
      {!! Form::open(['action' => 'App\Http\Controllers\VydajskladController@store', 'method' => 'POST']) !!}
              <div class="row">  
                <div class="form-group col-md-2">
                  
                    {{Form::number('vydajdatle', '', ['class' => 'form-control', 'placeholder' => 'Ďatle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('vydajmandle', '', ['class' => 'form-control', 'placeholder' => 'Mandle'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('vydajmarcipan', '', ['class' => 'form-control', 'placeholder' => 'Marcipán'])}}
                </div>
                    <div class="form-group col-md-2">
                    {{Form::number('vydajorechy', '', ['class' => 'form-control', 'placeholder' => 'Orechy'])}}
                </div>
                <div class="form-group col-md-2">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        </div>
       {!! Form::close() !!}
       @foreach($vydajsklads as $vydajsklad)
      
       <br>
            {{$vydajsklad->vydajdatle}} {{$vydajsklad->vydajmandle}} {{$vydajsklad->vydajmarcipan}} {{$vydajsklad->vydajorechy}}
           
       @endforeach

       <br>
       <br>
       <br>
       <br>
     
@endsection