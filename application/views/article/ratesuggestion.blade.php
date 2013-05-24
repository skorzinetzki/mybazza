@layout('main')

@section('title')
Artikel bewerten
@endsection

@section('navigation')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="span12"><h4>Artikeleinstellung abschließen</h4></div>
    </div>
    <div class="row">
        <div class="span6 offset1">
        {{ Form::horizontal_open() }}

        <h4>Bestimme die Creditpoints für deinen Artikel</h4>
        <p>Aufgrund deiner Angaben haben wir den Artikel mit
            <span id="suggestedCreditPoints"><strong>{{ $article->rateSuggestion() }}</strong></span>
            Creditpoints bewertet. Du kannst die Creditpoints auch noch selber bestimmen.
            Es ist aber ratsam, dich an dem Vorschlag zu orientieren, da dieser
            auf Basis deiner Angaben und den bisher vorhandenen Artikeln errechnet wurde.</p>
        {{ Form::control_group(Form::label('creditpoints', 'Creditpoints'), Form::xlarge_text('creditpoints', $article->rateSuggestion()), '', $errors->first('creditpoints', Typography::error(':message'))) }}

        {{ Form::actions(array(Button::primary_submit('Save Creditpoints')->with_icon('ok'), Form::button('Cancel')->with_icon('remove'))) }}
        {{ Form::close() }}
        </div>
    </div>
@endsection

@section('footer')
@endsection