<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Print Table</title>
        <meta charset="UTF-8">
        <meta name=description content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>
            body {margin: 20px}
        </style>
    </head>
    <body>
        <table class="table table-bordered table-condensed">
            @foreach($data as $row)
                @if ($row == reset($data)) 
                    <tr>
                        @foreach($row as $key => $value)
                            @if($key!='action')
                            <th>{!! $key !!}</th>
                            @endif
                        @endforeach
                    </tr>
                @endif
                <tr>
                    @foreach($row as $key => $value)
                        @if($key!='action')
                        @if (is_string($value) || trim($value)==='' || is_numeric($value))
                            <td>{!! $value !!}</td>
                        @endif
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    </body>
</html>
