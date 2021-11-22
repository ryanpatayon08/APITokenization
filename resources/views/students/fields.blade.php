<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middlename', 'Middlename:') !!}
    {!! Form::text('middlename', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::text('birthdate', null, ['class' => 'form-control','id'=>'birthdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#birthdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Citizenship Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citizenship', 'Citizenship:') !!}
    {!! Form::text('citizenship', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Religion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('religion', 'Religion:') !!}
    {!! Form::text('religion', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>