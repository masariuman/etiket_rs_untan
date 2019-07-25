<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    @foreach($label as $label)
        <!-- do something here | divs -->
        {{-- <table>
            <tr>
                <td>
                    <img src="{{asset('logo.png')}}">
                </td>
            </tr>
        </table> --}}
        <h1>{{ $title }}</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="page-break"></div>
    @endforeach


</body>
</html>
