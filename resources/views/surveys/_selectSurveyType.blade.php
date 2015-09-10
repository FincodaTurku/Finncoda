{!! Form::label('type', 'Select a survey type: ') !!}
    <select name="type" class="form-control">
    @foreach($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
    </select>

    <!--Title Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('title', 'Title: ') !!}
        {!! Form::text('title',null, ['class' => 'form-control']) !!}
    </div>

    <!--Description Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('description', 'Description: ') !!}
        {!! Form::text('description',null, ['class' => 'form-control']) !!}
    </div>