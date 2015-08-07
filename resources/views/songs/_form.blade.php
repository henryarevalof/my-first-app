
<div class="form-group {{ $errors->has('TitleSong')?'has-error':''}}" >
    {!! Form::label('TitleSong','Title Song') !!}
    {!! Form::text('TitleSong', null, ['class'=>'form-control']) !!}
   <!-- <span class="help-block">{{ $errors->first('TitleSong') }}</span> -->
        {!! $errors->first('TitleSong','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('Slug')?'has-error':''}}">
    {!! Form::label('Slug','Slug') !!}
    {!! Form::text('Slug', null,['class'=>'form-control']) !!}
    {!! $errors->first('Slug','<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
    {!! Form::label('Lyrics','Lyrics') !!}
    {!! Form::textarea('LyricsSong',null,  ['class'=>'form-control'])  !!}
</div>

