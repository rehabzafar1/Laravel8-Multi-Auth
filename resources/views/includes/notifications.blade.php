
<script>
    $(document).ready(function () {
        <?php if (Session::has("success")): ?>
        demo.showNotification('top','right', '2', 'Success', '{{ Session::get('success') }}')
        <?php endif ?>

        <?php if (Session::has("error")): ?>
        demo.showNotification('top','right', '4', 'Error', '{{ Session::get('error') }}')
        <?php endif ?>

        <?php if (Session::has("warning")): ?>
        demo.showNotification('top','right', '3', 'Warning', '{{ Session::get('warning') }}')
        <?php endif ?>

        @if ($errors->any())
        @foreach($errors->all() as $e)
        demo.showNotification('top','right', '4', 'Error', '{{ $e }}')
        @endforeach
        @endif

        <?php

        if(Session::has("success")):
            Session::remove("success");
        endif;

        if(Session::has("warning")):
            Session::remove("warning");
        endif;

        if(Session::has("error")):
            Session::remove("error");
        endif;
        ?>
    })

</script>
