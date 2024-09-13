<!DOCTYPE HTML
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        table {}

        tbody {}

        tr {}

        td {}
    </style>
</head>

<body>
    <h1>{{ $title }}</h1>

    <table>
        <tbody>
            <tr>
                <td>{{ $order['fio'] }}</td>
            </tr>
            <tr>
                <td>{{ $order['contact'] }}</td>
            </tr>
            <tr>
                <td>{{ $order['city'] }}</td>
            </tr>
            <tr>
                <td>Замовлений товар: {{ $order['product'] }}</td>
            </tr>
            <tr>
                <td>Опис: {{ $order['description'] }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
