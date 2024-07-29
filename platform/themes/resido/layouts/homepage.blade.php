{!! Theme::partial('header') !!}

<div id="app">
    <div id="ismain-homes">
        {!! Theme::content() !!}
    </div>
</div>

{!! Theme::partial('footer') !!}

<script>
    jQuery('.removeindex').remove()
</script>