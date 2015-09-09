{!! Form::label('type', 'Select a survey type: ') !!}
<select name="type" class="form-control">
@foreach($types as $type)
    <option value="{{ $type->id }}">{{ $type->name }}</option>
@endforeach
</select>