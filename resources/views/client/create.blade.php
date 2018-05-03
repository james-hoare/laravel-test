<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="{{ asset('js/validate.js') }}" type="text/javascript"></script>
</head>
<body>
    <div id="form-container">
        {{ Form::open(array('action' => 'ClientController@store')) }}
        <div class="heading" id="div_one">Step 1: Your details</div>
        <div class="content" id="details_one">
            <div class="element_container">
                {{ Form::label('firstName', 'First Name:') }}
                {{ Form::text('firstName', '', ['required' => 'required']) }}
            </div>
            <div class="element_container">
                {{ Form::label('lastName', 'Surname:') }}
                {{ Form::text('lastName', '', ['required' => 'required']) }}
            </div>
            {{ Form::label('email', 'Email Address:') }}
            {{ Form::email('email', '', ['required' => 'required']) }}
            <div class="next" id="d1_next">Next ></div>
        </div>
        <div class="heading" id="div_two">Step 2: More comments</div>
        <div class="content" id="details_two">
            <div class="element_container">
                {{ Form::label('mobile', 'Mobile:') }}
                {{ Form::tel('mobile', '', ['required' => 'required']) }}
            </div>
            <div class="element_container">
                {{ Form::label('gender', 'Gender:') }}
                {{ Form::select('gender', ['M' => 'Male', 'F' => 'Female']) }}
            </div>
            {{ Form::label('dob', 'Date of Birth:') }}
            {{ Form::date('dob', '', ['placeholder' => 'DD/MM/YYYY', 'required' => 'required']) }}
            <div class="next" id="d2_next">Next ></div>
        </div>
        <div class="heading" id="div_three">Step 3: Final comments</div>
        <div class="content" id="details_three">
            <div class="element_container">
                {{ Form::label('comments', 'Additional Comments:') }}
                {{ Form::textarea('comments', '', ['cols' => 30, 'rows' => 8] ) }}
            </div>
            {{ Form::submit('Submit') }}
        </div>
        @if (count($errors))
        <div class="errors">Errors
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        {{ Form::close() }}
    </div>
@endif
</body>
</html>