@layout('main')

@section('title')
Artikel einstellen
@endsection

@section('navigation')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="span12"><h4>In drei Schritten Deinen Artikel einstellen</h4></div>
    </div>
    <div class="row">
        <div class="span6 offset1">
        {{ Form::horizontal_open_for_files() }}

        <h4>Schritt 1: Artikelbeschreibung</h4>
        {{ Form::control_group(Form::label('name', 'Name'), Form::xlarge_text('name', Input::old('name')), '', $errors->first('name', Typography::error(':message'))) }}
        {{ Form::control_group(Form::label('category_id', 'Category'), Form::select('category_id', $categories), '', $errors->first('category_id', Typography::error(':message'))) }}
        {{ Form::control_group(Form::label('description', 'Description'), Form::xlarge_textarea('description', Input::old('description'), array('rows' => '5')), '', $errors->first('description', Typography::error(':message'))) }}

        <h4>Schritt 2: Artikelbewertung</h4>
        {{ Form::control_group(Form::label('condition_id', 'Condition'), Form::select('condition_id', $conditions), '', $errors->first('condition_id', Typography::error(':message'))) }}
        {{ Form::control_group(Form::label('maturity_id', 'Maturity'), Form::select('maturity_id', $maturities), '', $errors->first('maturity_id', Typography::error(':message'))) }}
        {{ Form::control_group(Form::label('price', 'Original price'), Form::xlarge_text('price', Input::old('price')), '', $errors->first('price', Typography::error(':message'))) }}

        <h4>Schritt 3: Bilder hinzufügen</h4>
        {{ Form::control_group(Form::label('image', 'Image'), Form::file('image')) }}

        {{ Form::actions(array(Button::primary_submit('Submit article')->with_icon('ok'), Form::button('Cancel')->with_icon('remove'))) }}
        {{ Form::close() }}
        </div>
    </div>
@endsection

@section('footer')
@endsection