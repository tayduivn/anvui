<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script>
        var CONFIG = {
            url: "{{ env('APP_URL') }}"
        }
        var userInfo =  {
                'id': "{{ Auth::user()->id }}",
                'username': "{{ Auth::user()->username }}",
                'email': "{{ Auth::user()->email }}",
            }
    </script>
</head>
<body>
    <div id="app"></div>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
                $('#content .page').toggleClass('active');
            });
        });
    </script>
</body>
</html>
