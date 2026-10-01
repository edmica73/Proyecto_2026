<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="calendario-horizontal">

    @for ($dia = 1; $dia <= 31; $dia++)
        <button type="button" class="dia">
            {{ $dia }}
        </button>
    @endfor

    </div>

    <style>
        .calendario-horizontal {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 10px;
        }

        .dia {
            min-width: 45px;
            height: 45px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: white;
            cursor: pointer;
        }

        .dia:hover {
            background: #eee;
        }
    </style>
</body>
</html>