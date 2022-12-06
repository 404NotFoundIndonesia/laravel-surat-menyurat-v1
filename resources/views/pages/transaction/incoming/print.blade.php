<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
        }

        h4 {
            margin-top: 0;
            font-weight: normal;
        }

        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
        }

        #filter-section {
            margin: 30px 0;
            text-align: start;
        }
    </style>
</head>
<body onload="window.print()">

<h1>{{ $config['institution_name'] }}</h1>
<h4>{{ $config['institution_address'] }}</h4>
<hr>

<h2>{{ $title }}</h2>

@if($since && $until && $filter)
    <div id="filter-section">
        {{ __('model.letter.' . $filter) }}: {{ "$since - $until" }}
        <br>
        Total: {{ count($data) }}
    </div>
@endif

<table>
    <thead>
    <tr>
        <th>{{ __('model.letter.agenda_number') }}</th>
        <th>{{ __('model.letter.reference_number') }}</th>
        <th>{{ __('model.letter.from') }}</th>
        <th>{{ __('model.letter.letter_date') }}</th>
        <th>{{ __('model.letter.description') }}</th>
        <th>{{ __('model.letter.note') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $letter)
        <tr>
            <td>{{ $letter->agenda_number }}</td>
            <td>{{ $letter->reference_number }}</td>
            <td>{{ $letter->from }}</td>
            <td>{{ $letter->formatted_letter_date }}</td>
            <td>{{ $letter->description }}</td>
            <td>{{ $letter->note }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
