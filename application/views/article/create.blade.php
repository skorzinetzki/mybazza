@layout('main')

@section('title')
Artikel einstellen
@endsection

@section('navigation')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="span12">In drei Schritten Deinen Artikel eingestellen</div>
    </div>
    <div class="row">
        <div class="span4 offset1"><h4>Schritt 1: Artikelbeschreibung</h4></div>
        <div class="span2 offset1">Name</div><div class="span2"></div>
        <div class="span2 offset1">Kategorie</div><div class="span2"></div>
        <div class="span2 offset1">Beschreibung</div><div class="span2"></div>
    </div>
    <div class="row">
        <div class="span4 offset1"><h4>Schritt 2: Artikelbewertung</h4></div>
        <div class="span2 offset1">Zustand</div><div class="span2"></div>
        <div class="span2 offset1">Alter</div><div class="span2"></div>
        <div class="span2 offset1">Neupreis</div><div class="span2"></div>
        <div class="span4 offset1">Du erhälst für Deinen Artikel X Credits.</div>
    </div>
    <div class="row">
        <div class="span4 offset1"><h4>Schritt 3: Bilder hinzufügen</h4></div>
        <div class="span2 offset1">Bild</div><div class="span2"></div>
    </div>
    {{--
    {{ Alert::info('<i class="icon-info-sign"></i> Just for debugging: ' . Request::method())->open() }}

    {{ Form::horizontal_open_for_files() }}
    {{ Form::control_group(Form::label('name', 'Name'), Form::xlarge_text('name', Input::old('name')), '', $errors->first('name', Typography::error(':message'))) }}
    {{ Form::control_group(Form::label('description', 'Description'), Form::xlarge_textarea('description', Input::old('description'), array('rows' => '5')), '', $errors->first('description', Typography::error(':message'))) }}
    {{ Form::control_group(Form::label('image', 'Image'), Form::file('image')) }}
    {{ Form::control_group(Form::label('category_id', 'Category'), Form::select('category_id', $categories), '', $errors->first('category_id', Typography::error(':message'))) }}
    {{ Form::actions(array(Button::primary_submit('Save changes')->with_icon('ok'), Form::button('Cancel')->with_icon('remove'))) }}
    {{ Form::close() }}
    --}
@endsection

@section('footer')
@endsection