<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lễ công bố nền tảng hợp đồng điện tử</title>
    <meta property="og:image" content="https://halan.vn/themes/99/public/imgs/hlhddt19.jpg"/>
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="500" />
    <link rel="shortcut icon" href="https://anvui.vn/favicon.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="https://anvui.vn/favicon.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="https://anvui.vn/favicon.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="https://anvui.vn/favicon.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="https://anvui.vn/favicon.png">

</head>

<body>
    @if( isset($data['id']) )
    <iframe src="https://halan.vn/le-cong-bo-hop-dong-dien-tu-{{ $data['id'] }}#u" id="main-content-iframe" frameborder="0" onload="document.title=parent.frames['cframe'].document.title;"></iframe>
    @else
    <iframe src="https://halan.vn/le-cong-bo-hop-dong-dien-tu" id="main-content-iframe" frameborder="0" onload="document.title=parent.frames['cframe'].document.title;"></iframe>
    @endif
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            box-sizing: border-box;
        }
        iframe {
            width: 100%;
            height: 100vh;
        }
    </style>
</body>
</html>