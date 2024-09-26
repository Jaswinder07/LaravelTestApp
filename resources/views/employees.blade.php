<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <ul>
            @foreach ($employees as $employee)
                <li>
                    {{ $employee->name }}
                    @if ($employee->children->isNotEmpty())
                        <ul>
                            @foreach ($employee->children as $child)
                                @include('employees', ['employees' => [$child]])
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
