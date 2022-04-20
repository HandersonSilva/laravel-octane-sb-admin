<script>
    @if (Session::has('status_message'))
        var type = "{{Session::get('status_message')}}"
        var text = "{{Session::get('message')}}"

        switch (type) {
            case 'success':
                Toastify({
                    text: text,
                    className: "toast-success",
                    close: true,
                }).showToast();
                break;
            case 'error':
                Toastify({
                    text: text,
                    className: "toast-error",
                    close: true,
                }).showToast();
                break;
            case 'warning':
                Toastify({
                    text: text,
                    className: "toast-warning",
                    close: true,
                }).showToast();
                break;
            case 'info':
                Toastify({
                    text: text,
                    className: "toast-info",
                    close: true,
                }).showToast();
                break;
            default:
                Toastify({
                    text: text,
                    className: "toast-info",
                    close: true,
                }).showToast();
        }
    @endif
</script>
