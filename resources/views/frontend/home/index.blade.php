@extends("templates.dedigital")

@section("meta")
    @component("components.description")
        @slot("description")
            aa
        @endslot
    @endcomponent
@endsection

@section("title")
    @component("components.title")
        @slot("title")
            {{config("app.name")}}
        @endslot
    @endcomponent
@endsection