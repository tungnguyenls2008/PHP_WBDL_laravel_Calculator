<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    td {
        border: 1px solid darkblue;
        size: 40px;
    }
    fieldset {
        margin: auto;
        width: 50%;
    }
    legend {
        align-content: center;
        text-align: center;
        font-size: 40px;
    }
    div {
        text-align: center;
        margin: auto;
    }
    button {
        width: 100%;
    }
    body {
        margin: auto;
    }
</style>
<body>
<div id="outbox">
    <fieldset style="border: #636b6f">
        <legend>ADVANCED CALCULATOR</legend>
        <form method="post" action="{{ route('calculator') }}">
            @csrf
            <table style="margin: auto">

                <tr>
                    <td colspan="4"><label for="output">Equations:</label><input id="output" name="output" onkeypress="buttonclk()"
                                                                                 readonly type="text" value="{{ session('output') }}" placeholder="0">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><label for="result">Result:</label><input id="result" readonly type="text"
                                                                              placeholder="0" value="{{ session('result') }}" name="result"></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" value="(" onclick=buttonclk(this.value)>(</button>
                    </td>
                    <td>
                        <button type="button" value=")" onclick=buttonclk(this.value)>)</button>
                    </td>
                    <td>
                        <button type="button" value="">%</button>
                    </td>
                    <td>
                        <button type="reset">AC</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" value="7" onclick=buttonclk(this.value)>7</button>
                    </td>
                    <td>
                        <button type="button" value="8" onclick=buttonclk(this.value)>8</button>
                    </td>
                    <td>
                        <button type="button" value="9" onclick=buttonclk(this.value)>9</button>
                    </td>
                    <td>
                        <button type="button" value="/" onclick=buttonclk(this.value)>/</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" value="4" onclick=buttonclk(this.value)>4</button>
                    </td>
                    <td>
                        <button type="button" value="5" onclick=buttonclk(this.value)>5</button>
                    </td>
                    <td>
                        <button type="button" value="6" onclick=buttonclk(this.value)>6</button>
                    </td>
                    <td>
                        <button type="button" value="*" onclick=buttonclk(this.value)>*</button>
                    </td>
                </tr>
                <tr>

                    <td>
                        <button type="button" value="1" onclick=buttonclk(this.value)>1</button>
                    </td>
                    <td>
                        <button type="button" value="2" onclick=buttonclk(this.value)>2</button>
                    </td>
                    <td>
                        <button type="button" value="3" onclick=buttonclk(this.value)>3</button>
                    </td>
                    <td>
                        <button type="button" value="-" onclick=buttonclk(this.value)>-</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" value="0" onclick=buttonclk(this.value)>0</button>
                    </td>
                    <td>
                        <button type="button" value="." onclick=buttonclk(this.value)>.</button>
                    </td>
                    <td>
                        <button type="submit" value="=">=</button>
                    </td>
                    <td>
                        <button type="button" value="+" onclick=buttonclk(this.value)>+</button>
                    </td>
                </tr>

            </table>
        </form>
        <script>

        </script>
    </fieldset>
</div>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
