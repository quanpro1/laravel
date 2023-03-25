<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="nhap username"/>
        <input type="hidden" name="_method" value="GET">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    </div>
    <button type="submit">submit</button>
</form>