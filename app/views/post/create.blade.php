<h1>Create new post</h1>


@if(isset($errors))
<ul>
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
</ul>
@endif

{{ Form::model($post, array('route' => array('post.store'))) }}

    <div class="field">
        {{ Form::label('title', 'Title') }}
        <br>
        {{ Form::text('title') }}
    </div>

    <div class="field">
        {{ Form::label('body', 'Body') }}
        <br>
        {{ Form::textarea('body') }}
    </div>

    <div class="actions">
        {{ Form::submit() }}
    </div>

{{ Form::close() }}