@layout('main')

@section('title')
create new Article
@endsection

@section('navigation')
    @parent
@endsection

@section('content')
    {{ Alert::info('<i class="icon-info-sign"></i> Just for debugging: ' . Request::method())->open() }}

    {{ Form::horizontal_open_for_files() }}
    {{ Form::control_group(Form::label('name', 'Name'), Form::xlarge_text('name', Input::old('name')), '', $errors->first('name', Typography::error(':message'))) }}
    {{ Form::control_group(Form::label('description', 'Description'), Form::xlarge_textarea('description', Input::old('description'), array('rows' => '5')), '', $errors->first('description', Typography::error(':message'))) }}
    {{ Form::control_group(Form::label('image', 'Image'), Form::file('image')) }}
    {{ Form::control_group(Form::label('category_id', 'Category'), Form::select('category_id', $categories), '', $errors->first('category_id', Typography::error(':message'))) }}
    {{ Form::actions(array(Button::primary_submit('Save changes')->with_icon('ok'), Form::button('Cancel')->with_icon('remove'))) }}
    {{ Form::close() }}
@endsection

@section('footer')
@endsection